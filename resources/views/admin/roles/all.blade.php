@component('admin.layouts.content', ['title' => 'مجوز های گروهی'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">مجوز های گروهی</li>
    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">فهرست مجوز های گروهی</h3>
                    <div class="card-tools d-flex">
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="جستجو" value="{{ request('search') }}">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group-sm mr-1">
                            <a href="{{route('admin.roles.create')}}" class="btn btn-warning">ایجاد مجوز گروهی جدید</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0 text-center">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شناسنه</th>
                            <th>عنوان</th>
                            <th>توضیحات</th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td>{{$role->label}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('admin.roles.edit', $role->id)}}" class="btn btn-sm btn-primary">ویرایش</a>
                                        <form action="{{route('admin.roles.destroy' ,  $role->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn  mr-1 btn-sm btn-danger">حذف</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $roles->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>



@endcomponent

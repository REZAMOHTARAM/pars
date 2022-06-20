@component('admin.layouts.content', ['title' => 'لیست زیر شاخه های اصلی'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.subbunches.index')}}?subbunchid={{request('subbunchid')}}">لیست زیر شاخه های اصلی</a></li>
        <li class="breadcrumb-item active">لیست زیر مجموعه های اصلی</li>
    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">زیر مجموعه های اصلی</h3>
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
                            <a href="{{route('admin.subsetbunches.create')}}?subbunchid={{request('subbunchid')}}" class="btn btn-warning">ایجاد زیر مجموعه اصلی جدید</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0 text-center">
                    <table class="table table-hover">
                        <tbody><tr>
                            <th>شناسنه</th>
                            <th>عنوان زیر شاخه</th>
                            <th>اقدامات</th>
                        </tr>
                        @foreach($subsetbunches as $subsetbunch)
                            <tr>
                                <td>{{$subsetbunch->id}}</td>
                                <td>{{$subsetbunch->name}}</td>
                                <td>
                                    <div class="card-body table-responsive p-0 text-center d-flex">
                                        <a href="{{route('admin.subsetbunches.edit', $subsetbunch->id)}}?subbunchid={{$subsetbunch->subbunch_id}}" class="btn btn-sm btn-primary">ویرایش</a>
                                        <form action="{{route('admin.subsetbunches.destroy' , $subsetbunch->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn  mr-1 btn-sm btn-danger">حذف</button>
                                        </form>
                                        <a href="{{route('admin.questionbunches.index')}}?subsetbunchid={{$subsetbunch->id}}" class="btn mr-1 btn-sm btn-warning">زیرمجموعه</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody></table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $subsetbunches->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>



@endcomponent

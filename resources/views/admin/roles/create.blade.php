@component('admin.layouts.content', ['title'=> 'ایجاد مجوز گروهی'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.roles.index')}}">لیست مجوزهای گروهی</a></li>
        <li class="breadcrumb-item active">ایجاد مجوز گروهی جدید</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد مجوز گروهی جدید</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.roles.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">نام مجوز گروهی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="نام مجوز گروهی را وارد کنید">
            </div>
            <div class="form-group">
                <label for="inputNumber_melli3" class="col-sm-2 control-label">توضیحات مجوز گروهی</label>
                <input type="text" name="label" class="form-control" id="inputNumber_melli3" placeholder="توضیحات مجوز گروهی را وارد کنید">
            </div>
            <div class="form-group">
                <label for="inputNumber_melli3" class="col-sm-2 control-label">لیست مجوزها</label>
                <select class="form-control" name="permissions[]" multiple>
                    @foreach(\App\Models\Permission::all() as $permission)
                        <option value="{{$permission->id}}">{{$permission->name}} - {{$permission->label}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ثبت</button>
            <a href="{{route('admin.roles.index')}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

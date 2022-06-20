@component('admin.layouts.content', ['title'=> 'ویرایش مجوز گروهی'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.roles.index')}}">فهرست مجوز های گروهی</a></li>
        <li class="breadcrumb-item active">ویرایش مجوز گروهی</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش مجوز گروهی</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.roles.update' , $role->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان مجوز گروهی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="عنوان مجوز گروهی را وارد کنید" value="{{$role->name}}">
            </div>
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">توضیحات مجوز گروهی</label>
                <input type="text" name="label" class="form-control" id="inputName3" placeholder="توضیحات مجوز گروهی را وارد کنید" value="{{$role->label}}">
            </div>
            <div class="form-group">
                <label for="inputNumber_melli3" class="col-sm-2 control-label">لیست مجوزها</label>
                <select class="form-control" name="permissions[]" multiple>
                    @foreach(\App\Models\Permission::all() as $permission)
                        <option value="{{$permission->id}}" {{ in_array($permission->id , $role->permissions->pluck('id')->toArray()) ? 'selected' : '' }}>{{$permission->name}} - {{$permission->label}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ویرایش</button>
            <a href="{{route('admin.roles.index')}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

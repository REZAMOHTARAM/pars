@component('admin.layouts.content', ['title'=> 'ویرایش مجوز انفرادی'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.permissions.index')}}">فهرست مجوز های انفرادی</a></li>
        <li class="breadcrumb-item active">ویرایش مجوز انفرادی</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش مجوز انفرادی</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.permissions.update' , $permission->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان مجوز انفرادی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="عنوان مجوز انفرادی را وارد کنید" value="{{$permission->name}}">
            </div>
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">توضیحات مجوز انفرادی</label>
                <input type="text" name="label" class="form-control" id="inputName3" placeholder="توضیحات مجوز انفرادی را وارد کنید" value="{{$permission->label}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ویرایش</button>
            <a href="{{route('admin.permissions.index')}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

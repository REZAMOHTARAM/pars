@component('admin.layouts.content', ['title'=> 'ایجاد مجوز انفرادی'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.permissions.index')}}">لیست مجوزهای انفرادی</a></li>
        <li class="breadcrumb-item active">ایجاد مجوز انفرادی جدید</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد مجوز انفرادی جدید</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.permissions.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">نام مجوز</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="نام مجوز را وارد کنید">
            </div>
            <div class="form-group">
                <label for="inputNumber_melli3" class="col-sm-2 control-label">توضیحات مجوز</label>
                <input type="text" name="label" class="form-control" id="inputNumber_melli3" placeholder="توضیحات مجوز را وارد کنید">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ثبت</button>
            <a href="{{route('admin.permissions.index')}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

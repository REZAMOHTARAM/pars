@component('admin.layouts.content', ['title'=> 'ایجاد کاربر جدید'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">لیست کاربران</a></li>
        <li class="breadcrumb-item active">ایجاد کاربر جدید</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد کاربر جدید</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.users.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">نام و نام خانوادگی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="نام و نام خانوادگی را وارد کنید">
            </div>
            <div class="form-group">
                <label for="inputNumber_melli3" class="col-sm-2 control-label">کدملی</label>
                <input type="text" name="number_melli" class="form-control" id="inputNumber_melli3" placeholder="کدملی را وارد کنید">
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>
                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="ایمیل را وارد کنید">
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">رمز عبور</label>
                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="رمز عبور را وارد کنید">
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">تکرار رمز عبور</label>
                <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="رمز عبور تکرار را وارد کنید">
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="form-check">
                        <input type="checkbox" name="verify" class="form-check-input" id="verify">
                        <label class="form-check-label" for="verify">کاربر فعال شود</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ثبت</button>
            <a href="{{route('admin.users.index')}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

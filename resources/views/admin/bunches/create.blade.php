@component('admin.layouts.content', ['title'=> 'ایجاد شاخه اصلی جدید'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.bunches.index')}}">لیست شاخه های اصلی</a></li>
        <li class="breadcrumb-item active">ایجاد شاخه اصلی جدید</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد شاخه اصلی جدید</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان شاخه اصلی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="عنوان شاخه اصلی را وارد کنید">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ایجاد</button>
            <a href="{{route('admin.bunches.index')}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

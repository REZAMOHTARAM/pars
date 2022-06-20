@component('admin.layouts.content', ['title'=> 'ویرایش شاخه اصلی'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.bunches.index')}}">لیست شاخه های اصلی</a></li>
        <li class="breadcrumb-item active">ویرایش شاخه اصلی</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش شاخه اصلی</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.bunches.update' , ['bunch'=> $bunch->id])}}" method="post">
        @csrf
        @method('PATCH')
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان شاخه اصلی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="عنوان شاخه اصلی را وارد کنید" value="{{$bunch->name}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ویرایش</button>
            <a href="{{route('admin.bunches.index')}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

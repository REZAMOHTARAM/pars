@component('admin.layouts.content', ['title'=> 'ایجاد زیر شاخه اصلی جدید'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.subsetbunches.index')}}?subbunchid={{request('subbunchid')}}">لیست زیر شاخه های اصلی</a></li>
        <li class="breadcrumb-item active">ایجاد زیر شاخه اصلی جدید</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد زیر شاخه اصلی جدید</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.subsetbunches.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان زیر مجموعه اصلی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="عنوان زیر مجموعه اصلی را وارد کنید">
            </div>
        </div>
            @if(request('subbunchid'))
    @php
    $subbunchid = \App\Models\Subbunche::find(request('subbunchid'))
    @endphp
            <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان شاخه اصلی</label>
                <input type="text" name="subbunchname" class="form-control" id="inputName3" placeholder="عنوان زیر شاخه اصلی را وارد کنید" disabled value="{{ $subbunchid->name}}">
                <input type="hidden" name="subbunch_id" class="form-control" id="inputName3" placeholder="عنوان زیر شاخه اصلی را وارد کنید" value="{{ $subbunchid->id}}">
            </div>
        </div>
        @endif
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ایجاد</button>
            <a href="{{route('admin.subsetbunches.index')}}?subbunchid={{ $subbunchid->id}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

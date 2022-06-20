@component('admin.layouts.content', ['title'=> 'ایجاد زیر شاخه اصلی جدید'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.subbunches.index')}}?bunchid={{request('bunchid')}}">لیست زیر شاخه های اصلی</a></li>
        <li class="breadcrumb-item active">ایجاد زیر مجموعه اصلی جدید</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد زیر مجموعه اصلی جدید</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.subbunches.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان زیر شاخه اصلی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="عنوان زیر شاخه اصلی را وارد کنید">
            </div>
        </div>
        @if(request('bunchid'))
            @php
                $bunchid = \App\Models\Bunch::find(request('bunchid'))
            @endphp
            <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان زیر مجموعه اصلی</label>
                <input type="text" name="bunchname" class="form-control" id="inputName3" placeholder="عنوان زیر شاخه اصلی را وارد کنید" disabled value="{{$bunchid->name}}">
                <input type="hidden" name="bunch_id" class="form-control" id="inputName3" placeholder="عنوان زیر شاخه اصلی را وارد کنید" value="{{$bunchid->id}}">
            </div>
        </div>
        @endif
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ایجاد</button>
            <a href="{{route('admin.subsetbunches.index')}}?bunchid={{$bunchid->id}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

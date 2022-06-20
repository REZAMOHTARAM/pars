@component('admin.layouts.content', ['title'=> 'ایجاد سوال زیر مجموعه جدید'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.subsetbunches.index')}}?subbunchid={{request('subbunchid')}}">لیست زیر شاخه های اصلی</a></li>
        <li class="breadcrumb-item active">ایجاد سوال زیر مجموعه اصلی جدید</li>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد سوالات زیر مجموعه اصلی جدید</h3>
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('admin.questionbunches.store')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان سوال زیر مجموعه اصلی</label>
                <input type="text" name="name" class="form-control" id="inputName3" placeholder="عنوان سوال زیر مجموعه اصلی را وارد کنید">
            </div>
        </div>
            @if(request('subsetbunchid'))
    @php
    $subsetbunchid = \App\Models\Subsetbunch::find(request('subsetbunchid'))
    @endphp
            <div class="card-body">
            <div class="form-group">
                <label for="inputName3" class="col-sm-2 control-label">عنوان زیر مجموعه اصلی</label>
                <input type="text" name="subsetbunchname" class="form-control" id="inputName3" placeholder="عنوان زیر مجموعه اصلی را وارد کنید" disabled value="{{ $subsetbunchid->name}}">
                <input type="hidden" name="subsetbunch_id" class="form-control" id="inputName3" placeholder="عنوان زیر مجموعه اصلی را وارد کنید" value="{{ $subsetbunchid->id}}">
            </div>
        </div>
        @endif
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">ایجاد</button>
            <a href="{{route('admin.questionbunches.index')}}?subsetbunchid={{ $subsetbunchid->id}}" class="btn btn-default float-left">لغو</a>
        </div>
        <!-- /.card-footer -->
    </form>

@endcomponent

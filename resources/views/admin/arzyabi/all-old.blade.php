@component('admin.layouts.content', ['title' => 'پنل مدیریت'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card card-danger">
                <div class="card-header text-center">
                    <h3 class="card-title">ارزیابی فنی کارکنان</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0 text-center">
                    <table class="table table-hover">
                        <tbody><tr>
                        </tr>
                        @foreach($bunches as $bunch)
                            <tr class="bg-success border-danger">
                                <td colspan="3"><label name="{{$bunch->id}}">{{$bunch->name}}</label></td>
                            </tr>
                            @php
                                $subbunches = \App\Models\Subbunche::all()->where('bunch_id' , $bunch->id);
                            @endphp
                            @foreach($subbunches as $subbunch)
                                <tr class="bg-primary">
                                    <td colspan="3"><label name="{{$subbunch->id}}">{{$subbunch->name}}</label></td></td>
                                </tr>
                                @php
                                    $subsetbunches = \App\Models\Subsetbunch::all()->where('subbunch_id' , $subbunch->id);
                                @endphp
                                @foreach($subsetbunches as $subsetbunch)
                                    <tr class="bg-secondary">
                                        <td colspan="3"><label name="{{$subsetbunch->id}}">{{$subsetbunch->name}}</label></td></td>
                                    </tr>
                                    @php
                                        $questionbunches = \App\Models\Questionbunch::all()->where('subsetbunch_id' , $subsetbunch->id);
                                    @endphp

                                        <tr class="bg-body">
                                            <td>
                                            <select class="form-control">
                                                @foreach($questionbunches as $questionbunch)
                                                <option value="{{$questionbunch->id}}" >{{$questionbunch->name}} -- {{$questionbunch->label}}</option>
                                                @endforeach
                                            </select>
                                            </td>
                                            <td><input type="text" name="scoure" placeholder="" class="text-center"/></td>
                                        </tr>

                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody></table>
                    <form class="form-horizontal" action="{{route('admin.arzyabi.store')}}" method="post">
                    <input type="submit" value="ثبت"/>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>


@endcomponent

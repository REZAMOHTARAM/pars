@component('admin.layouts.content', ['title' => 'پنل مدیریت'])

    @slot('subtitle')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card p-3">
                <div class="card-header text-center bg-danger">
                    <h3 class="card-title">ارزیابی فنی کارکنان</h3>
                </div>

                <div class="card-body table-responsive p-0 text-center">
                    <h6 class="mt-3 mb-1">لطفا یکی از شاخه های زیر را انتخاب نمائید :</h6>
                    <div class="accordion mt-5 " id="accordionBunches">
                        <!-- Start : Bunches  -->
                        @foreach($bunches as $bunch)
                            <div class="card">
                                <div class="card-header bg-info " id="headingOne-{{$bunch->id}}">

                                    <a href="javascript:;" class="text-right text-white" data-toggle="collapse"
                                       data-target="#collapseID-{{$bunch->id}}" aria-expanded="true"
                                       aria-controls="collapseOne">
                                        {{$bunch->name}}
                                    </a>

                                </div>

                                <div id="collapseID-{{$bunch->id}}" class="collapse"
                                     aria-labelledby="headingOne-{{$bunch->id}}"
                                     data-parent="#accordionBunches">
                                    <div class="card-body">
                                        <h6 class="mt-3 mb-1">لطفا یکی از زیر شاخه های زیر را انتخاب نمائید :</h6>
                                        <!-- Start : SubBunches  -->
                                        <div class="accordion" id="accordionSubBunches">

                                            @foreach($bunch->subbunches as $subbunch)
                                                <div class="card mt-3">
                                                    <div class="card-header bg-warning" id="headingOne">
                                                        <a href="javascript:;"
                                                           class="text-right text-white font-weight-bold"
                                                           data-toggle="collapse"
                                                           data-target="#collapseSubBunchesID-{{$subbunch->id}}"
                                                           aria-expanded="true"
                                                           aria-controls="collapseSubBunchesID-{{$subbunch->id}}">
                                                            {{$subbunch->name}}
                                                        </a>
                                                    </div>

                                                    <div id="collapseSubBunchesID-{{$subbunch->id}}" class="collapse"
                                                         aria-labelledby="headingOne"
                                                         data-parent="#accordionSubBunches">
                                                        <div class="card-body">
                                                            <h6 class="mt-3 mb-1">یکی از عناوین ذیل را انتخاب نمائید
                                                                :</h6>
                                                            <!-- Start : SubsetBunches  -->
                                                            <div class="accordion" id="accordionExample">
                                                                @foreach($subbunch->subsetBunches as $subsetbranch)
                                                                    <div class="card mt-3">
                                                                        <div class="card-header bg-secondary"
                                                                             id="headingOne">

                                                                            <a href="javascript:;"
                                                                               class="text-white font-weight-bold"
                                                                               data-toggle="collapse"
                                                                               data-target="#collapseSubSetBunch-{{$subsetbranch->id}}"
                                                                               aria-expanded="true"
                                                                               aria-controls="collapseOne">
                                                                                {{$subsetbranch->name}}
                                                                            </a>

                                                                        </div>

                                                                        <div
                                                                            id="collapseSubSetBunch-{{$subsetbranch->id}}"
                                                                            class="collapse"
                                                                            aria-labelledby="headingOne"
                                                                            data-parent="#accordionExample">
                                                                            <div class="card-body">
                                                                                <div class="row m-1 p-2">
                                                                                    <div class="col-lg-12 col-md-12">
                                                                                        <p class="font-weight-bold text-right">
                                                                                            لطفا به سوالات زیر پاسخ دهید
                                                                                            : </p>
                                                                                        <hr>
                                                                                        <!--Begin : Questions -->
                                                                                        <div class="row p-0 m-0">
                                                                                            <!--Begin : Question Form -->
                                                                                            <div
                                                                                                class="col-lg-12 col-md-12">
                                                                                                <form
                                                                                                    action="{{route('arzyabi.store')}}"
                                                                                                    method="post">
                                                                                                    @csrf

                                                                                                    <input type="hidden"
                                                                                                           name="bunch_id"
                                                                                                           value="{{$bunch->id}}">
                                                                                                    <input type="hidden"
                                                                                                           name="subbunch_id"
                                                                                                           value="{{$subbunch->id}}">
                                                                                                    <input type="hidden"
                                                                                                           name="subsetbunch_id"
                                                                                                           value="{{$subsetbranch->id}}">

                                                                                                    <div
                                                                                                        class="col-md-12">
                                                                                                        {{$subsetbranch->unAnsweredQuestions()}}
                                                                                                        @foreach($subsetbranch->questions as $key => $question)
                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                name="question_ids[]"
                                                                                                                value="{{$question->id}}">
                                                                                                            <div
                                                                                                                class="row p-0 m-0 mt-2 mb-2">
                                                                                                                <div
                                                                                                                    class="col-md-9">
                                                                                                                    <p class="text-right">
                                                                                                                        <label
                                                                                                                            for="questionID-{{$question->id}}">
                                                                                                                            {{++$key .' . ' .$question->name }}
                                                                                                                        </label>
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="col-md-3">
                                                                                                                    <input
                                                                                                                        type="number"
                                                                                                                        name="scoures[]"
                                                                                                                        class="form-control"
                                                                                                                        placeholder="{{$question->label}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <hr>
                                                                                                        @endforeach
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-md-12">
                                                                                                        <input
                                                                                                            type="submit"
                                                                                                            class="btn btn-success"
                                                                                                            value="ثبت اطلاعات">
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <!--Begin : Question Form -->
                                                                                        </div>
                                                                                        <!--End : Questions -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <!-- End : SubsetBunches  -->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                        <!-- End : SubBunches  -->
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- End : Bunches  -->
                    </div>
                </div>

            </div>

        </div>
    </div>


@endcomponent

@section('scripts')
    <script>
        alert('test');
    </script>
@endsection

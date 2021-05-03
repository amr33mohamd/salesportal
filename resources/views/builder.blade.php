<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag & Drop Components Layout</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>

<body>


<!-- Main Container -->
<div class="" id="fieldBuilder">
    <loading :active.sync="isLoading"
             :can-cancel="false"
             :is-full-page="true"></loading>
    <!-- Topbar -->
    <div class="container-fluid topbar py-2">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-12 my-auto">
                <a href="/admin" class="inline-block float-end">
                            <a class="text-white inline">
                               <span>FBP </span>
                            </a>
                            <a href="/admin" class="inline-block float-end">
                                <img src="/assets/images/icons/arrow-down.svg" alt="" class="img-fluid me-auto" />
                            </a>
            </div>
            <div class="col-xl-7 col-lg-7 col-12 my-auto">
{{--                            <a href="">--}}
{{--                                <img src="/assets/images/icons/plus.svg" alt="" class="img-fluid" />--}}
{{--                            </a>--}}
            </div>
            <div class="col-xl-3 col-lg-3 col-12 my-auto">
                <div class="float-end">
                    {{--                <a href="" class=" inline-block">--}}
                    {{--                    <img src="assets/images/icons/setting.svg" alt="" class="img-fluid" />--}}
                    {{--                </a>--}}
                    {{--                <a href="" class="px-4 inline-block">--}}
                    {{--                    <img src="assets/images/icons/hamburger.svg" alt="" class="img-fluid" />--}}
                    {{--                </a>--}}
                    <button @click="save" type="button" class="btn btn-primary inline-block">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <div class="container-fluid">
        <div class="row">
            <!-- Left Column -->
            <div class="col-xl-2 col-lg-2 col-12 px-0">
                <div class="boxScroll">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item" style="position: fixed;max-width: 250px">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Basic Fields
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"  aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-light" >
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-12">
                                            <draggable class="row g-2" v-model="mainFields" :sort="false" :group="{ name: 'fields', pull: 'clone', put: false }" :clone="handleClone">
                                                <div v-for="field in mainFields" :key="field.value" class="col-xl-6 col-lg-6 col-12">
                                                    <div class="card components-card text-center">
                                                        <div class="card-body p-2">
                                                            <font-awesome-icon :icon="field.icon" size="2x"></font-awesome-icon>
                                                            <p class="para-sm">@{{field.label}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </draggable>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->
            <!-- Center Column -->
            <div class="col-xl-8 col-lg-8 col-12">
                <form class="py-5 px-2">
                    <field-component @set-current-field="setCurrentField" @remove-field="removeField" :current-fields="currentFields" v-model="currentFields" ></field-component>
                </form>
            </div>
            <!-- End -->
            <!-- Right Column -->
            <field-settings-component v-if="currentFieldId && currentField" v-model="currentField"></field-settings-component>
            <!-- End -->
        </div>
    </div>
</div>
<!-- End -->

<script>
    window.fields= @json($fields);
</script>
<!-- Bootstrap Js -->
<script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/builder.js')}}"></script>
</body>

</html>

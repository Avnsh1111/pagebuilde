@extends('admin.layout.admin')

@section('title') Add Page @endsection

@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
              Create new page
            </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        @if(count($errors) > 0 )
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul class="p-0 m-0" style="list-style: none;">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul class="p-0 m-0" style="list-style: none;">
                    <li>{{session()->get('success')}}</li>
                </ul>
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul class="p-0 m-0" style="list-style: none;">
                    <li>{{session()->get('error')}}</li>
                </ul>
            </div>
        @endif
        <form enctype="multipart/form-data" action="{{route('admin.pages.savePage')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter page name" autocomplete="off"/>
                    <input type="hidden" id="pageData" name="pagedata">
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-left">Featured Image</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url({{asset('admin/media/image/blank.png')}})">
                            <div class="image-input-wrapper"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="featured_image" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="profile_avatar_remove">
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
                        </div>
                        <span class="form-text text-muted">Default empty input with blank image</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Background color</label>
                    <input type="color" name="color" class="form-control" id="color" placeholder="select background color" value="#ffffff"/>
                </div>

                <div class="checkbox-inline">
                    <label class="checkbox checkbox-lg">
                        <input type="checkbox" checked="checked" name="is_home_page"/>
                        <span></span>
                        Is Home Page
                    </label>
                </div>

                <div id="editorjs">

                </div>
                    {{--                <div class="form-group">--}}
{{--                    <label for="exampleInputPassword1">Password</label>--}}
{{--                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label>Static:</label>--}}
{{--                    <p class="form-control-plaintext text-muted">email@example.com</p>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleSelect1">Example select</label>--}}
{{--                    <select class="form-control" id="exampleSelect1">--}}
{{--                        <option>1</option>--}}
{{--                        <option>2</option>--}}
{{--                        <option>3</option>--}}
{{--                        <option>4</option>--}}
{{--                        <option>5</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleSelect2">Example multiple select</label>--}}
{{--                    <select multiple="" class="form-control" id="exampleSelect2">--}}
{{--                        <option>1</option>--}}
{{--                        <option>2</option>--}}
{{--                        <option>3</option>--}}
{{--                        <option>4</option>--}}
{{--                        <option>5</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group mb-1">--}}
{{--                    <label for="exampleTextarea">Example textarea</label>--}}
{{--                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>--}}
{{--                </div>--}}
            </div>
            <div id="output"></div>
            <div class="card-footer">
                <button type="submit" id="saveButton" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
    </div>
    </div>
    </div>

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script><!-- Header -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script><!-- Image -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script><!-- Delimiter -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script><!-- List -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script><!-- Checklist -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script><!-- Quote -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/code@latest"></script><!-- Code -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script><!-- Embed -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script><!-- Table -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script><!-- Link -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/warning@latest"></script><!-- Warning -->

    <script src="https://cdn.jsdelivr.net/npm/@editorjs/marker@latest"></script><!-- Marker -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/inline-code@latest"></script><!-- Inline Code -->
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>

    <script type="text/javascript">

        var avatar5 = new KTImageInput('kt_image_5');

        avatar5.on('cancel', function(imageInput) {
            swal.fire({
                title: 'Image successfully changed !',
                type: 'success',
                buttonsStyling: false,
                confirmButtonText: 'Awesome!',
                confirmButtonClass: 'btn btn-primary font-weight-bold'
            });
        });

        avatar5.on('change', function(imageInput) {
            swal.fire({
                title: 'Image successfully changed !',
                type: 'success',
                buttonsStyling: false,
                confirmButtonText: 'Awesome!',
                confirmButtonClass: 'btn btn-primary font-weight-bold'
            });
        });

        avatar5.on('remove', function(imageInput) {
            swal.fire({
                title: 'Image successfully removed !',
                type: 'error',
                buttonsStyling: false,
                confirmButtonText: 'Got it!',
                confirmButtonClass: 'btn btn-primary font-weight-bold'
            });
        });
        var saveButton = document.getElementById('saveButton');
        var editor = new EditorJS({
            /**
             * Wrapper of Editor
             */
            holder: 'editorjs',

            /**
             * Tools list
             */
            tools: {
                /**
                 * Each Tool is a Plugin. Pass them via 'class' option with necessary settings {@link docs/tools.md}
                 */
                header: {
                    class: Header,
                    inlineToolbar: ['link'],
                    config: {
                        placeholder: 'Header'
                    },
                    shortcut: 'CMD+SHIFT+H'
                },

                /**
                 * Or pass class directly without any configuration
                 */
                image: {
                        class: SimpleImage,
                    inlineToolbar: ['link'],
                },

                list: {
                    class: List,
                    inlineToolbar: true,
                    shortcut: 'CMD+SHIFT+L'
                },

                checklist: {
                    class: Checklist,
                    inlineToolbar: true,
                },

                quote: {
                    class: Quote,
                    inlineToolbar: true,
                    config: {
                        quotePlaceholder: 'Enter a quote',
                        captionPlaceholder: 'Quote\'s author',
                    },
                    shortcut: 'CMD+SHIFT+O'
                },

                warning: Warning,

                marker: {
                    class:  Marker,
                    shortcut: 'CMD+SHIFT+M'
                },

                code: {
                    class:  CodeTool,
                    shortcut: 'CMD+SHIFT+C'
                },

                delimiter: Delimiter,

                inlineCode: {
                    class: InlineCode,
                    shortcut: 'CMD+SHIFT+C'
                },

                linkTool: LinkTool,

                embed: Embed,

                table: {
                    class: Table,
                    inlineToolbar: true,
                    shortcut: 'CMD+ALT+T'
                },

            },

            /**
             * This Tool will be used as default
             */
            // initialBlock: 'paragraph',

            /**
             * Initial Editor data
             */
            data: {

            },
            onReady: function(){
               // saveButton.click();
            },
            onChange: function() {
                console.log('something changed');
                saveData();
            }
        });

        function saveData() {
            editor.save().then((savedData) => {
                //cPreview.show(savedData, document.getElementById("output"));
               $("#pageData").val(JSON.stringify(savedData));
            });
        }

        // saveButton.addEventListener('click', function () {
        //     editor.save().then((savedData) => {
        //         //cPreview.show(savedData, document.getElementById("output"));
        //         console.log(savedData);
        //     });
        // });
    </script>
@endsection

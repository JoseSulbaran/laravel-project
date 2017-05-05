@extends('usuario.inicio')
@section('css')
       
        <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.gritter.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-editable.min.css') }}" />

        <!-- text fonts -->
        <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />

        <!-- ace styles -->
        
        <link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />
@endsection
@section('javascript')
        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>


        
        <script src="{{ asset('assets/js/bootstrap-editable.min.js') }}"></script>
        <script src="{{ asset('assets/js/ace-editable.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.gritter.min.js') }}"></script>

        <!-- ace scripts -->
        <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
        <script src="{{ asset('assets/js/ace.min.js') }}"></script>


        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>


        
        <script src="{{ asset('assets/js/bootstrap-editable.min.js') }}"></script>
        <script src="{{ asset('assets/js/ace-editable.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.gritter.min.js') }}"></script>

        <!-- ace scripts -->
        <script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
        <script src="{{ asset('assets/js/ace.min.js') }}"></script>


        <script type="text/javascript">
            jQuery(function($) {
            
                //editables on first profile page
                $.fn.editable.defaults.mode = 'inline';

                try {
                

                    var last_gritter
                    $('#avatar').editable({
                        type: 'image',
                        name: 'avatar',
                        value: null,
                        //onblur: 'ignore',  //don't reset or hide editable onblur?!
                        image: {
                            
                            btn_choose: 'Nueva Imagen',
                            droppable: true,
                            maxSize: 110000,//~100Kb
            
                            //and a few extra ones here
                            name: 'avatar',//put the field name here as well, will be used inside the custom plugin
                            on_error : function(error_type) {//on_error function will be called when the selected file has a problem
                                if(last_gritter) $.gritter.remove(last_gritter);
                                if(error_type == 1) {//file format error
                                    last_gritter = $.gritter.add({
                                        title: 'El archivo no es una imagen!',
                                        text: 'Por favor, elija un imagen jpg|png!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                } else if(error_type == 2) {//file size rror
                                    last_gritter = $.gritter.add({
                                        title: 'Archivo demasiado grande!',
                                        text: 'El tamaño de la imagen no debe exceder 100Kb!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                }
                                else {//other error
                                }
                            },
                            on_success : function() {
                                $.gritter.removeAll();
                            }
                        },
                        url: function(params) {
                            
                            var deferred = new $.Deferred;
                                                
                            var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();

                            if(!value || value.length == 0) {
                                deferred.resolve();console.log("1");

                                return deferred.promise();
                            }
            
            
                            //dummy upload
                            setTimeout(function(){
                                if("FileReader" in window) {
                                    //for browsers that have a thumbnail of selected image
                                    var thumb = $('#avatar').next().find('img').data('thumb');
                                    if(thumb) $('#avatar').get(0).src = thumb;
                                }
                                
                                deferred.resolve({'status':'OK'});
                                if(last_gritter) $.gritter.remove(last_gritter);
                                last_gritter = $.gritter.add({
                                    title: 'Imagen actualizada!',
                                    text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                    class_name: 'gritter-info gritter-center'
                                });                             

                             } , parseInt(Math.random() * 800 + 800))



                            return deferred.promise();
                            
                            // ***END OF UPDATE AVATAR HERE*** //
                        },
                        
                        success: function(response, newValue) {
                        }
                    })
                }catch(e) {}
                

                

            });


        </script>
@endsection

@section('area_trabajo')

@if(Session::has('message_create'))
    <div class="alert bg-success" role="alert">
        <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> 
        {{ Session::get('message_create') }}
    </div>
@endif 

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> {{ $error }} <br>
            @endforeach
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success ">
                <div class="panel-heading" style="text-align: center"> Perfil </div>
                <div class="panel-body">
                <br><br>
                    <div class="col-md-11">
                       
                                
                                    <div id="user-profile-1" class="user-profile row">
                                        <div class="col-xs-12 col-sm-3 center">
                                            <div>
                                                <span class="profile-picture">
                                                    <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="{{ asset('dist/img/user2-160x160.jpg') }}" />
                                                </span>

                                                

                                                <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                    <div class="inline position-relative">
                                                        <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                            <i class="ace-icon fa fa-circle light-green"></i>
                                                            &nbsp;
                                                            <span class="white">Alex M. Doe</span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                   
                </div>
            </div>
        </div>
    </div>

@endsection
<!DOCTYPE html>
<html>
    <head>
        <title>Sniip</title>

        <!-- Load Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Custom Css -->
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                background-color: #666;
                line-height:1;
            }

            .container {
                vertical-align: middle;
                max-width: 1000px;
                margin: 0 auto;
                background-color:white;
                padding:20px;
                margin-top:20px;
                position:relative;
            }

            .content-border, textarea {
                border: 1px solid #ccc;
            }

            textarea {
                width:100%;
            }

            .btn-custom{
                padding: 6px 24px;
                position:absolute;
                top:20px;
                right:20px;
            }

            .col-md-6{
                position:static;
            }

            form {
                margin:0px;
            }

            .message {
                background-color: white;
                padding:10px;
            }

            p{
                margin:0px;
            }

            .light-grey {
                background-color: #eee;
            }
        </style>

    </head>
    <body>
    <!-- show success messages -->
    @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- show error messages -->
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="content col-md-6 col-md-offset-3">
                    <form class="form-custom" role="form" method="POST" action="{!! url('/post')  !!}" novalidate>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}">
                        <textarea name="text" rows="2"></textarea>
                        <input type="submit" class="btn btn-custom btn-primary" value="Add">
                    </form>
                    @if ($errors->has())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="container light-grey">
            <div class="row">
                <div class="content col-md-6 col-md-offset-3">
                    <div class="content-border">
                        @foreach($messages as $message)
                            <div class="message row" >
                                <div class="col-md-9">
                                    <p><strong>{!! $message->created_at->format('M j, Y, g:iA') !!}</strong></p>
                                    <p>{!! $message->text !!}</p>
                                </div>
                                <div class="col-md-3">
                                    <form method="POST" action="{{ route('message.destroy', [ 'message_id' => $message->id ]) }}" accept-charset="UTF-8">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}">
                                        <input onClick="return confirm('are you sure?')"  class="btn btn-danger" type="submit" value="Delete">
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

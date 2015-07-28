<html>
<head>
    {!!HTML::style('css/bootstrap.min.css')!!}
</head>
<body>

<div class="col-md-6" ng-app="myApp" np-controller="myCtrl">
{!!Form::open(array('route'=>'r_owner.create'))!!}
    Owner Name{!!Form::input('text','ownerName','',['class'=>'form-control','placeholder'=>'Owner Name','ng-model'=>'ownerName'])!!}
    Branch{!!Form::select('branch',['yes'=>'Yes','no'=>'No'],null,['class'=>'form-control','ng-model'=>'branch'])!!}
    Multiple{!!Form::select('multiple',['yes'=>'Yes','no'=>'No'],null,['class'=>'form-control','ng-model'=>'multiple'])!!}
    {!!Form::submit('Submit',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
</div>

</body>
    {!!HTML::script('js/angular.min.js')!!}
    {!!HTML::script('js/jquery-1.11.3.min.js')!!}
    {!!HTML::script('js/jquery-ui.min.js')!!}
    {!!HTML::script('js/custom.js')!!}
</html>
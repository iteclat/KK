@extends('master.index')
@section('styles')
    {!!HTML::style('dataTables.css')!!}
@stop
@section('page')
    <div class="col-md-12" ng-controller="user-control">
        <div class="panel panel-default">
            <div class="panel-heading">
                KahaKhane Users Detail
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <form class="form-inline">
                        <div class="input-group">
                            <select class="form-control">
                                <option>10</option>
                                <option>30</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search here...">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Search</button>
                              </span>
                        </div><!-- /input-group -->

                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Category <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </form>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th>User Full Name</th>
                            <th>Position</th>
                            <th>Join Date</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td>Rajan Kandel</td>
                            <td>CEO</td>
                            <td>01-01-2015</td>
                            <td class="center">rk@e-worksuk.com</td>
                            <td class="center"><a href="#"><i class="fa fa-edit"></i> Edit</a> | <a href="#"><i class="fa fa-trash-o"></i> delete</a></td>
                        </tr>
                        </tbody>
                    </table>

                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav> <!-- /pagination -->

                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-md-12 -->
    </div>
@stop
@section('scripts')
    {!! HTML::script('js/jquery.dataTables.min.js')!!}
@stop
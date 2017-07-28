@extends('layout.admins')

@section('title','后台首页')

@section('content')
<table class="mws-table mws-datatable">
        <thead>
            <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>4</td>
                <td><span class="badge badge-info">X</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 5.0</td>
                <td>Win 95+</td>
                <td>5</td>
                <td><span class="badge badge-success">C</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 5.5</td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td><span class="badge badge-important">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 6</td>
                <td>Win 98+</td>
                <td>6</td>
                <td><span class="badge badge-warning">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td>7</td>
                <td><span class="badge badge-success">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td>Win XP</td>
                <td>6</td>
                <td><span class="badge badge-warning">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.7</td>
                <td><span class="badge badge-info">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Firefox 1.5</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.8</td>
                <td><span class="badge">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Camino 1.5</td>
                <td>OSX.3+</td>
                <td>1.8</td>
                <td><span class="badge badge-info">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Netscape 7.2</td>
                <td>Win 95+ / Mac OS 8.6-9.2</td>
                <td>1.7</td>
                <td><span class="badge badge-important">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>4</td>
                <td><span class="badge badge-warning">X</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 5.0</td>
                <td>Win 95+</td>
                <td>5</td>
                <td><span class="badge badge-success">C</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 5.5</td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td><span class="badge badge-warning">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 6</td>
                <td>Win 98+</td>
                <td>6</td>
                <td><span class="badge badge-info">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td>7</td>
                <td><span class="badge">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td>Win XP</td>
                <td>6</td>
                <td><span class="badge badge-warning">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.7</td>
                <td><span class="badge badge-success">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Firefox 1.5</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.8</td>
                <td><span class="badge badge-warning">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Camino 1.5</td>
                <td>OSX.3+</td>
                <td>1.8</td>
                <td><span class="badge badge-info">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Gecko</td>
                <td>Netscape 7.2</td>
                <td>Win 95+ / Mac OS 8.6-9.2</td>
                <td>1.7</td>
                <td><span class="badge">A</span></td>
                <td>
                    <span class="btn-group">
                        <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td>
            </tr>
        </tbody>
    </table>


<form action="/user/100" method="post">
	<button>修改</button>		
	{{ method_field('PUT') }}
</form>


@endsection
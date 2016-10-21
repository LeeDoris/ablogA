@extends('layouts.admin')
@section('content')

    <div class="centercontent tables">

        <div class="pageheader notab">
            <h1 class="pagetitle">Tables</h1>
            <span class="pagedesc">This is a sample description of a page</span>

        </div><!--pageheader-->

        <div id="contentwrapper" class="contentwrapper">


            <div class="contenttitle2">
                <h3>Table with Action</h3>
            </div><!--contenttitle-->
            <div class="tableoptions">
                <button class="deletebutton radius3" title="table2">Delete Selected</button> &nbsp;
                <select class="radius3">
                    <option value="">Show All</option>
                    <option value="">Rendering Engine</option>
                    <option value="">Platform</option>
                </select> &nbsp;
                <button class="radius3">Apply Filter</button>
            </div><!--tableoptions-->
            <table cellpadding="0" cellspacing="0" border="0" id="table2" class="stdtable stdtablecb">
                <colgroup>
                    <col class="con0" style="width: 4%" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                    <col class="con1" />
                    <col class="con0" />
                </colgroup>
                <thead>
                <tr>
                    <th class="head0"><input type="checkbox" class="checkall" /></th>
                    <th class="head1">Rendering engine</th>
                    <th class="head0">Browser</th>
                    <th class="head1">Platform(s)</th>
                    <th class="head0">Engine version</th>
                    <th class="head1">CSS grade</th>
                    <th class="head0">&nbsp;</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th class="head0"><input type="checkbox" class="checkall" /></th>
                    <th class="head1">Rendering engine</th>
                    <th class="head0">Browser</th>
                    <th class="head1">Platform(s)</th>
                    <th class="head0">Engine version</th>
                    <th class="head1">CSS grade</th>
                    <th class="head0">&nbsp;</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td align="center"><input type="checkbox" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td class="center">4</td>
                    <td class="center">X</td>
                    <td class="center"><a href="" class="edit">Edit</a> &nbsp; <a href="" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td align="center"><input type="checkbox" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center">5</td>
                    <td class="center">C</td>
                    <td class="center"><a href="" class="edit">Edit</a> &nbsp; <a href="" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td align="center"><input type="checkbox" /></td>
                    <td>Trident</td>
                    <td>Internet  Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td class="center">5.5</td>
                    <td class="center">A</td>
                    <td class="center"><a href="" class="edit">Edit</a> &nbsp; <a href="" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td align="center"><input type="checkbox" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 6</td>
                    <td>Win 98+</td>
                    <td class="center">6</td>
                    <td class="center">A</td>
                    <td class="center"><a href="" class="edit">Edit</a> &nbsp; <a href="" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td align="center"><input type="checkbox" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td class="center">7</td>
                    <td class="center">A</td>
                    <td class="center"><a href="" class="edit">Edit</a> &nbsp; <a href="" class="delete">Delete</a></td>
                </tr>
                </tbody>
            </table>

            <br /><br />

        </div><!--contentwrapper-->

    </div>

@endsection
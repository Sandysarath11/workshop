@extends('layouts.default')

@section('content')

<div class="container mt-4">
    <div class="mb-4 mt-2">
        <a href="" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add</a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead class="table-secondary">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>16</td>
                    <td>10th</td>
                    <td>A</td>
                    <td>9876543210</td>
                    <td>
                        <button class="btn btn-sm btn-info"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>15</td>
                    <td>9th</td>
                    <td>B</td>
                    <td>9876543211</td>
                    <td>
                        <button class="btn btn-sm btn-info">View</button>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Robert Brown</td>
                    <td>17</td>
                    <td>11th</td>
                    <td>C</td>
                    <td>9876543212</td>
                    <td>
                        <button class="btn btn-sm btn-info">View</button>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@stop
@extends('templates.main')
@section('title', 'Intranet - Forum diskusi')

<!-- start body  -->
<div class="container-fluid">
    @section('judul', 'Forum Diskusi')
    @section('sub', 'BWA')

    @section('konten')
    <div class="row">
        <div class="col-12">
        <h4>Sample design for discusion...</h4>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Topic</th>
                <th scope="col">Total Posts</th>
                <th scope="col">Users</th>
                <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><i class="fas fa-circle text-danger"></i> How to use this forum </td>
                <td><span class="badge badge-primary badge-counter">13</span><i class="fab fa-stack-exchange text-success"></i></td>
                <td>Otto</td>
                <td><i class="fas fa-calendar-alt"> 12 september 2019</i></td>
                </tr>
                <tr>
                <td><i class="fas fa-circle text-info"></i> Fundraising Discussion </td>
                <td><span class="badge badge-primary badge-counter">3</span><i class="fab fa-stack-exchange text-success"></i></td>
                <td>Thornton</td>
                <td><i class="fas fa-calendar-alt"> 12 september 2019</i></td>
                </tr>
                <tr>
                <td><i class="fas fa-circle text-warning"></i> Human Capital Discussion </td>
                <td><span class="badge badge-primary badge-counter">31</span><i class="fab fa-stack-exchange text-success"></i></td>
                <td>the Bird</td>
                <td><i class="fas fa-calendar-alt"> 12 september 2019</i></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    @endsection('konten')
</div>
@extends('layout')

@section('title','User List')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background">
    <div class="container">
        <h1>List of Users</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="current">List of Users</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->


<!-- Starter Section Section -->
<section id="starter-section" class="starter-section section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>LIST OF USERS</h2>
        <div><span>Check Our</span> <span class="description-title">Users</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up">
        <div style="text-align: center; margin-top: 20px;">
            <!-- Flash Message for Add/Delete -->
            @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
            @endif
        </div>
    </div>

    <div class="container" data-aos="fade-up">
        <table border="1" cellpadding="10">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>

            @foreach ( $users as $user )
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('updateUser', $user->id) }}">EDIT</a></td>
                <td>
                    <form action="{{ route('destroy', $user->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this user?');">

                        @csrf
                        @method('DELETE')
                        <button type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>

</section><!-- /Starter Section Section -->
@endsection
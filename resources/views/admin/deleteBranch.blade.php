@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <h2>Manage Branches</h2>
    <p>Here, you can add or delete branches.</p>
    <a href="{{ route('admin.addBranch') }}" class="btn btn-success">Add Branch</a>
    <a href="{{ route('admin.deleteBranch') }}" class="btn btn-danger">Delete Branch</a>
@endsection

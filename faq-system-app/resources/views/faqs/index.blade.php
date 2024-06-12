@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">FAQs</div>

                <div class="card-body">
                    <a href="{{ route('faqs.create') }}" class="btn btn-primary">Add FAQ</a>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Question</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $faq)
                            <tr>
                                <td>{{ $faq->category->name }}</td>
                                <td>{{ $faq->question }}</td>
                                <td>
                                    <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

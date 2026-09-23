@extends('layouts.teacher.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Quote Card -->
            <div class="card shadow-lg border-0">
                <div class="card-body p-5 text-center" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 15px;">
                    <div class="mb-4">
                        <i class="fas fa-quote-left" style="font-size: 48px; opacity: 0.3;"></i>
                    </div>

                    @if($quote)
                        <h2 class="card-title mb-4" style="font-weight: 300; font-size: 28px; line-height: 1.6;">
                            "{{ $quote->quote }}"
                        </h2>

                        <p class="card-text" style="font-size: 16px; margin-bottom: 0;">
                            <strong>— {{ $quote->author ?? 'Unknown' }}</strong>
                        </p>

                        <div class="mt-4">
                            <span class="badge badge-light" style="font-size: 12px; padding: 8px 15px;">
                                {{ ucfirst(str_replace('_', ' ', $quote->category)) }}
                            </span>
                        </div>
                    @else
                        <h2 class="card-title mb-4">No quotes available</h2>
                        <p class="card-text">Please check back later!</p>
                    @endif

                    <div class="mt-5">
                        <i class="fas fa-quote-right" style="font-size: 48px; opacity: 0.3;"></i>
                    </div>
                </div>
            </div>

            <!-- Refresh Button -->
            <div class="text-center mt-4">
                <a href="{{ route('hello-teacher.inspiration.index') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-sync-alt"></i> Get Another Quote
                </a>
            </div>

            <!-- Category Filter -->
            <div class="card mt-5">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Filter by Category</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <a href="{{ route('hello-teacher.inspiration.category', 'teaching') }}" class="btn btn-outline-primary btn-block">
                                <i class="fas fa-chalkboard-user"></i> Teaching
                            </a>
                        </div>
                        <div class="col-md-6 mb-2">
                            <a href="{{ route('hello-teacher.inspiration.category', 'inspiration') }}" class="btn btn-outline-primary btn-block">
                                <i class="fas fa-rocket"></i> Inspiration
                            </a>
                        </div>
                        <div class="col-md-6 mb-2">
                            <a href="{{ route('hello-teacher.inspiration.category', 'motivation') }}" class="btn btn-outline-primary btn-block">
                                <i class="fas fa-fire"></i> Motivation
                            </a>
                        </div>
                        <div class="col-md-6 mb-2">
                            <a href="{{ route('hello-teacher.inspiration.category', 'professional_growth') }}" class="btn btn-outline-primary btn-block">
                                <i class="fas fa-chart-line"></i> Growth
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

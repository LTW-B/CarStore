@extends('layouts.admin')
@section('title', $viewAdminLayout['title'])
@section('content')
<section class="container my-5">
    <div class="card">
        {{-- <img src="path-to-your-image.jpg" alt="Lexus Car" class="card-img-top" /> --}}
        <div class="card-header">
            <h1 class="display-4">Admin Panel - Lexus Car Dealership</h1>
        </div>
        <div class="card-body">
            <p class="lead">Welcome to the Admin Panel for the Lexus Car Dealership website.</p>
            <p>This panel is designed to provide you with the tools and information you need to manage the online Lexus car store effectively.</p>
            <p>Here are some key features and functions available:</p>
            <ul>
                <li>Inventory Management: Add, edit, or remove Lexus car listings.</li>
                <li>User Management: Manage user accounts, including customers, salespeople, and administrators.</li>
                <li>Sales and Orders: View and process customer orders, track sales, and manage invoices.</li>
                <li>Analytics and Reporting: Access detailed reports and analytics to monitor website performance.</li>
                <li>Content Management: Update website content, such as images, descriptions, and promotions.</li>
            </ul>
            <p>If you have any questions or need assistance, please don't hesitate to contact our support team.</p>
        </div>
        <div class="card-footer">
            <p class="text-muted">Last Updated: September 23, 2023</p>
        </div>
    </div>
</section>



@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Enhanced viewport meta tag for better mobile rendering -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SCIZORA-Admin - Management Portal</title>
    @include('admin.dashboard.styles')
</head>
<body>
   
@include('admin.layouts.sidebar')
    <!-- Main Content -->
    <div class="main-content">
       @include('admin.layouts.navbar')

        <!-- Content Area -->
        <div class="content">
            <!-- Dashboard Content -->
           @include('admin.businessmanagement.dashboard')

            <!-- User Management Content -->
           @include('admin.businessmanagement.usermanagement')

            <!-- Business Management Content -->
           @include('admin.businessmanagement.businessesmanagement')

            <!-- Review Moderation Content -->
            @include('admin.businessmanagement.reviewmoderation')

            <!-- Analytics & Reports Content -->
            @include('admin.businessmanagement.analyticsreports')

            <!-- Points System Content -->
            @include('admin.businessmanagement.pointssystem')

            <!-- Settings Content -->
            @include('admin.businessmanagement.settings')
            
            <!-- Queries Content -->
            @include('admin.businessmanagement.queries')

            <!-- Campaigns Content -->
            @include('admin.businessmanagement.campaigns')

            <!-- Create Campaign Modal -->
            @include('admin.businessmanagement.createcampaign')

        </div>
    </div>

    <!-- Mobile Menu Toggle (Hidden on Desktop) -->
    <div class="menu-toggle hidden">
        <i class="icon">≡</i>
    </div>

    <!-- Add User Modal -->
    @include('admin.businessmanagement.adduser')

    <!-- Add Business Modal -->
    @include('admin.businessmanagement.addbusiness')

    <!-- View Details Modal -->
    @include('admin.businessmanagement.viewdetails')

    @include('admin.dashboard.script')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Enhanced viewport meta tag for better mobile rendering -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SCIZORA-Admin - Management Portal</title>
    <?php echo $__env->make('admin.dashboard.styles', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body>
   
<?php echo $__env->make('admin.layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Main Content -->
    <div class="main-content">
       <?php echo $__env->make('admin.layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Content Area -->
        <div class="content">
            <!-- Dashboard Content -->
           <?php echo $__env->make('admin.businessmanagement.dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- User Management Content -->
           <?php echo $__env->make('admin.businessmanagement.usermanagement', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- Business Management Content -->
           <?php echo $__env->make('admin.businessmanagement.businessesmanagement', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- Review Moderation Content -->
            <?php echo $__env->make('admin.businessmanagement.reviewmoderation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- Analytics & Reports Content -->
            <?php echo $__env->make('admin.businessmanagement.analyticsreports', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- Points System Content -->
            <?php echo $__env->make('admin.businessmanagement.pointssystem', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- Settings Content -->
            <?php echo $__env->make('admin.businessmanagement.settings', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- Queries Content -->
            <?php echo $__env->make('admin.businessmanagement.queries', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- Campaigns Content -->
            <?php echo $__env->make('admin.businessmanagement.campaigns', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- Create Campaign Modal -->
            <?php echo $__env->make('admin.businessmanagement.createcampaign', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        </div>
    </div>

    <!-- Mobile Menu Toggle (Hidden on Desktop) -->
    <div class="menu-toggle hidden">
        <i class="icon">≡</i>
    </div>

    <!-- Add User Modal -->
    <?php echo $__env->make('admin.businessmanagement.adduser', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Add Business Modal -->
    <?php echo $__env->make('admin.businessmanagement.addbusiness', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- View Details Modal -->
    <?php echo $__env->make('admin.businessmanagement.viewdetails', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('admin.dashboard.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH D:\Projects\SCIZORA\resources\views/admin/dashboard/dashboard.blade.php ENDPATH**/ ?>
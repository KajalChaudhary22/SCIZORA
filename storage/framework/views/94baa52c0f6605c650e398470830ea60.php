<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Enhanced viewport meta tag for better mobile rendering -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SCIZORA-Admin - Management Portal</title>
    <style>
        /* Global Styles */
        :root {
            --primary-color: #1544da;
            --primary-hover: #1124aa;
            --secondary-color: #1A1A1A;
            --secondary-hover: #333333;
            --success-color: #28A745;
            --success-hover: #218838;
            --danger-color: #DC3545;
            --danger-hover: #C82333;
            --warning-color: #FFC107;
            --warning-hover: #E0A800;
            --sidebar-color: #1A1A1A;
            --text-color: #333333;
            --text-light: #777777;
            --border-color: #E5E5E5;
            --bg-color: #F5F5F5;
            --white: #FFFFFF;
            --black: #000000;
            --card-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 80px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            -webkit-tap-highlight-color: transparent; /* Remove tap highlight on mobile */
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: var(--bg-color);
            color: var(--text-color);
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Sidebar Styles - Enhanced for mobile */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--sidebar-color);
            color: var(--white);
            height: 100vh;
            position: fixed;
            transition: var(--transition);
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            z-index: 1000; /* Ensure sidebar stays above content */
            transform: translateX(0);
        }

        .sidebar-header {
            padding: 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            background-color: rgba(0, 0, 0, 0.2);
        }

        .brand-name {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--white);
        }

        .brand-subtitle {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .menu {
            padding: 20px 0;
            flex: 1;
            overflow-y: auto;
        }

        .menu-item {
            padding: 12px 25px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            margin: 2px 0;
            color: rgba(255, 255, 255, 0.8);
            min-height: 48px; /* Better touch target */
        }

        .menu-item:hover {
            background-color: rgba(209, 0, 0, 0.2);
            color: var(--white);
        }

        .menu-item.active {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .menu-item i {
            margin-right: 12px;
            font-size: 1.1rem;
            min-width: 24px; /* Ensure consistent icon spacing */
        }

        .menu-text {
            transition: var(--transition);
            font-weight: 500;
        }

        .user-profile {
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 12px;
            overflow: hidden;
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            flex: 1;
        }

        .user-name {
            font-weight: 500;
            margin-bottom: 2px;
            color: var(--white);
        }

        .user-role {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.7);
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: var(--transition);
            min-width: 0; /* Prevent overflow issues */
            width: 100%; /* Ensure full width */
        }

        /* Navbar Styles - Enhanced for mobile */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: var(--white);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex-wrap: wrap; /* Allow items to wrap on mobile */
            gap: 10px; /* Space between items when wrapped */
        }

        .search-bar {
            flex: 1;
            min-width: 0; /* Allow shrinking */
            max-width: 100%; /* Prevent overflow */
            position: relative;
            margin-right: 10px; /* Space between search and icons */
        }

        .search-bar input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            outline: none;
            transition: var(--transition);
            background-color: var(--bg-color);
            font-size: 16px; /* Better mobile input */
        }

        .search-bar input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(209, 0, 0, 0.2);
        }

        .search-bar i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap; /* Allow icons to wrap */
            justify-content: flex-end; /* Align to the right */
        }

        .nav-icon {
            font-size: 1.2rem;
            color: var(--text-light);
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            min-width: 24px; /* Better touch target */
            text-align: center;
        }

        .nav-icon:hover {
            color: var(--primary-color);
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: bold;
        }

        .nav-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid var(--primary-color);
        }

        .nav-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Content Area Styles - Enhanced for mobile */
        .content {
            padding: 20px;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }

        .content-section {
            display: none;
            width: 100%;
        }

        .content-section.active {
            display: block;
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap; /* Allow items to wrap */
            gap: 10px;
            width: 100%;
        }

        .page-title {
            font-size: clamp(1.5rem, 4vw, 1.8rem); /* Responsive font size */
            color: var(--black);
            font-weight: 700;
            margin-right: 10px;
        }

        /* Stats Cards - Enhanced for mobile */
        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
            width: 100%;
        }

        .stat-card {
            background-color: var(--white);
            border-radius: 8px;
            padding: 15px;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            border-top: 4px solid var(--primary-color);
            min-width: 0; /* Prevent overflow */
            width: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .stat-title {
            color: var(--text-light);
            font-size: 0.85rem;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--black);
        }

        .stat-change {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
        }

        .stat-change.positive {
            color: var(--success-color);
        }

        .stat-change.negative {
            color: var(--danger-color);
        }

        .stat-change i {
            margin-right: 5px;
        }

        /* Dashboard Layout - Enhanced for mobile */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr; /* Changed to single column for mobile */
            gap: 15px;
            width: 100%;
        }

        .dashboard-main {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
        }

        .dashboard-sidebar {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
        }

        /* Tables - Enhanced for mobile scrolling */
        .table-container {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            margin-bottom: 25px;
            border: 1px solid var(--border-color);
            width: 100%;
            overflow-x: auto; /* Enable horizontal scrolling */
            -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
        }

        .table-header {
            padding: 15px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #FAFAFA;
            min-width: fit-content; /* Prevent header from shrinking */
            flex-wrap: wrap; /* Allow header items to wrap */
            gap: 10px;
        }

        .section-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--black);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px; /* Minimum table width */
        }

        th {
            text-align: left;
            padding: 12px 15px;
            background-color: #F5F5F5;
            color: var(--text-color);
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 1px solid var(--border-color);
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid var(--border-color);
            font-size: 0.9rem;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background-color: rgba(209, 0, 0, 0.05);
        }

        .status-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .status-active {
            background-color: #E6F7EB;
            color: var(--success-color);
        }

        .status-pending {
            background-color: #FFF8E6;
            color: var(--warning-color);
        }

        .status-suspended {
            background-color: #FFEEEE;
            color: var(--danger-color);
        }

        /* Enhanced Action Buttons - Better mobile layout */
        .action-buttons {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
        }

        .action-btn {
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 4px;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            min-width: 60px;
            min-height: 32px;
            white-space: nowrap; /* Prevent button text from wrapping */
        }

        .action-btn.view {
            background-color: #4A89DC;
            color: white;
        }

        .action-btn.view:hover {
            background-color: #3B7DDD;
        }

        .action-btn.edit {
            background-color: #5D9CEC;
            color: white;
        }

        .action-btn.edit:hover {
            background-color: #4A8FE7;
        }

        .action-btn.suspend {
            background-color: #ED5565;
            color: white;
        }

        .action-btn.suspend:hover {
            background-color: #DA4453;
        }

        .action-btn.activate {
            background-color: #48CFAD;
            color: white;
        }

        .action-btn.activate:hover {
            background-color: #37BC9B;
        }

        .action-btn.reject {
            background-color: #FC6E51;
            color: white;
        }

        .action-btn.reject:hover {
            background-color: #E9573F;
        }

        /* Filter Apply Button */
        .apply-filters {
            display: flex;
            justify-content: flex-end;
            padding: 12px 15px;
            background-color: #FAFAFA;
            border-top: 1px solid var(--border-color);
        }

        /* Approval Cards - Enhanced for mobile */
        .approval-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
            width: 100%;
        }

        .approval-card {
            background-color: var(--white);
            border-radius: 8px;
            padding: 15px;
            box-shadow: var(--card-shadow);
            border-left: 4px solid var(--warning-color);
            min-width: 0;
            width: 100%;
        }

        .approval-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--black);
            font-size: 1rem;
        }

        .approval-meta {
            color: var(--text-light);
            font-size: 0.85rem;
            margin-bottom: 12px;
        }

        .approval-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 8px 14px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            min-height: 36px;
        }

        .btn-sm {
            padding: 6px 10px;
            font-size: 0.75rem;
            min-height: 32px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }

        .btn-success {
            background-color: var(--success-color);
            color: white;
        }

        .btn-success:hover {
            background-color: var(--success-hover);
        }

        .btn-danger {
            background-color: var(--danger-color);
            color: white;
        }

        .btn-danger:hover {
            background-color: var(--danger-hover);
        }

        .btn-secondary {
            background-color: var(--white);
            color: var(--text-color);
            border: 1px solid var(--border-color);
        }

        .btn-secondary:hover {
            background-color: var(--bg-color);
        }

        .btn-black {
            background-color: var(--secondary-color);
            color: white;
        }

        .btn-black:hover {
            background-color: var(--secondary-hover);
        }

        /* Review Cards - Enhanced for mobile */
        .review-cards {
            display: flex;
            flex-direction: column;
            gap: 12px;
            width: 100%;
        }

        .review-card {
            background-color: var(--white);
            border-radius: 8px;
            padding: 15px;
            box-shadow: var(--card-shadow);
            border-left: 4px solid var(--warning-color);
            min-width: 0;
            width: 100%;
        }

        .review-card.positive {
            border-left-color: var(--success-color);
        }

        .review-card.negative {
            border-left-color: var(--danger-color);
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
            flex-wrap: wrap;
            gap: 8px;
            width: 100%;
        }

        .review-user {
            font-weight: 600;
            color: var(--black);
            font-size: 1rem;
        }

        .review-time {
            color: var(--text-light);
            font-size: 0.75rem;
        }

        .review-stars {
            color: #FFC107;
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .review-text {
            margin-bottom: 12px;
            line-height: 1.5;
            color: var(--text-color);
            font-size: 0.9rem;
        }

        .review-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        /* Form Elements - Enhanced for mobile */
        .form-group {
            margin-bottom: 15px;
            width: 100%;
        }

        .form-label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: var(--text-color);
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            background-color: var(--white);
            transition: var(--transition);
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(209, 0, 0, 0.2);
            outline: none;
        }

        /* Modal Styles - Enhanced for mobile */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 15px;
            box-sizing: border-box;
        }

        .modal-content {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            padding: 15px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            background: var(--white);
            z-index: 1;
        }

        .modal-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--black);
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-light);
            padding: 5px;
            margin-left: 10px;
        }

        .modal-body {
            padding: 15px;
        }

        .modal-footer {
            padding: 12px 15px;
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: flex-end;
            gap: 8px;
            position: sticky;
            bottom: 0;
            background: var(--white);
            z-index: 1;
            flex-wrap: wrap;
        }

        /* Analytics Charts - Enhanced for mobile */
        .chart-container {
            background-color: var(--white);
            border-radius: 8px;
            padding: 15px;
            box-shadow: var(--card-shadow);
            margin-bottom: 25px;
            width: 100%;
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .chart-title {
            font-weight: 600;
            color: var(--black);
            font-size: 1.1rem;
        }

        .chart-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .chart-placeholder {
            height: 250px;
            background-color: #F9F9F9;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            font-size: 1.1rem;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        /* Chart Styles */
        .chart {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 8px;
        }

        .chart-bars {
            display: flex;
            height: 180px;
            align-items: flex-end;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid var(--border-color);
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            width: 100%;
        }

        .chart-bar-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
            min-width: 40px;
        }

        .chart-bar {
            width: 30px;
            background-color: var(--primary-color);
            border-radius: 4px 4px 0 0;
            transition: height 0.5s ease;
            position: relative;
        }

        .chart-bar-label {
            margin-top: 5px;
            font-size: 0.75rem;
            color: var(--text-light);
            white-space: nowrap;
        }

        .chart-bar-value {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.75rem;
            font-weight: 600;
        }

        .chart-x-axis {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            font-size: 0.75rem;
            color: var(--text-light);
            width: 100%;
        }

        /* Pie Chart */
        .pie-chart {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: conic-gradient(
                #4A89DC 0% 25%,
                #5D9CEC 25% 45%,
                #48CFAD 45% 65%,
                #A0D468 65% 85%,
                #FFCE54 85% 100%
            );
            margin: 0 auto;
            position: relative;
        }

        .pie-chart-center {
            position: absolute;
            width: 60%;
            height: 60%;
            background-color: white;
            border-radius: 50%;
            top: 20%;
            left: 20%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .chart-legend {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 15px;
            width: 100%;
        }

        .chart-legend-item {
            display: flex;
            align-items: center;
            font-size: 0.75rem;
        }

        .chart-legend-color {
            width: 12px;
            height: 12px;
            border-radius: 3px;
            margin-right: 5px;
        }

        /* Points System Styles - Enhanced for mobile */
        .points-container {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: var(--card-shadow);
            padding: 15px;
            margin-bottom: 25px;
            width: 100%;
        }

        .points-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .points-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--black);
        }

        .points-summary {
            display: flex;
            align-items: center;
            gap: 12px;
            background-color: #F5F5F5;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            flex-wrap: wrap;
            width: 100%;
        }

        .points-level {
            background-color: var(--primary-color);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        .points-progress {
            flex: 1;
            min-width: 150px;
        }

        .progress-bar {
            height: 8px;
            background-color: #E5E5E5;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 5px;
            width: 100%;
        }

        .progress-fill {
            height: 100%;
            background-color: var(--primary-color);
            border-radius: 5px;
            width: 65%;
        }

        .progress-text {
            font-size: 0.75rem;
            color: var(--text-light);
            text-align: center;
        }

        .points-total {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--black);
        }

        .points-tasks {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 15px;
            margin-top: 15px;
            width: 100%;
        }

        .task-card {
            background-color: var(--white);
            border-radius: 8px;
            padding: 12px;
            box-shadow: var(--card-shadow);
            border-left: 4px solid var(--primary-color);
            width: 100%;
        }

        .task-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
            flex-wrap: wrap;
            gap: 8px;
        }

        .task-title {
            font-weight: 600;
            color: var(--black);
            font-size: 0.95rem;
        }

        .task-points {
            background-color: var(--primary-color);
            color: white;
            padding: 3px 8px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .task-description {
            color: var(--text-light);
            font-size: 0.85rem;
            margin-bottom: 8px;
        }

        .task-status {
            font-size: 0.75rem;
            color: var(--success-color);
            font-weight: 500;
        }

        .levels-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            min-width: 600px;
        }

        .levels-table th {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.8rem;
        }

        .levels-table td {
            text-align: center;
            padding: 10px;
            font-size: 0.85rem;
        }

        .levels-table tr:nth-child(even) {
            background-color: #FAFAFA;
        }

        .current-level {
            background-color: rgba(209, 0, 0, 0.1) !important;
            font-weight: 600;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 992px) {
            .sidebar {
                width: var(--sidebar-collapsed-width);
            }
            .sidebar-header, .menu-text, .user-info, .brand-subtitle {
                display: none;
            }
            .menu-item {
                justify-content: center;
                padding: 12px 0;
            }
            .menu-item i {
                margin-right: 0;
                font-size: 1.3rem;
            }
            .user-profile {
                justify-content: center;
                padding: 15px 0;
            }
            .user-avatar {
                margin-right: 0;
            }
            .main-content {
                margin-left: var(--sidebar-collapsed-width);
            }
            
            /* Adjust table layouts */
            .table-container {
                overflow-x: auto;
            }
        }

        @media (max-width: 768px) {
            .dashboard-grid {
    grid-template-columns: 1fr;
    overflow-x: hidden;
  }
  
  .dashboard-main, .dashboard-sidebar {
    width: 100%;
    max-width: 100%;
    overflow-x: hidden;
  }
  
  .table-container {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  
  .approval-cards {
    grid-template-columns: 1fr;
  }
  
  .stats-cards {
    grid-template-columns: 1fr;
  }
  
  .points-container {
    overflow-x: hidden;
  }
  
  .points-summary {
    flex-direction: column;
    align-items: stretch;
  }
  
  .points-progress {
    width: 100%;
    margin: 10px 0;
  }
  
  .points-tasks {
    grid-template-columns: 1fr;
  }
  
  .levels-table {
    min-width: 100%;
    overflow-x: auto;
    display: block;
  }
  
  .levels-table th, 
  .levels-table td {
    white-space: nowrap;
  }
}
			
			.navbar {
                flex-direction: column;
                align-items: stretch;
                padding: 12px;
                gap: 12px;
            }
            .search-bar {
                width: 100%;
                max-width: 100%;
                margin-bottom: 0;
                margin-right: 0;
            }
            .navbar-right {
                justify-content: flex-end;
                width: 100%;
            }
            .content {
                padding: 15px;
            }
            .content-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
            .action-buttons {
                flex-direction: row;
                gap: 6px;
            }
            .action-btn {
                width: auto;
            }
            .points-summary {
                flex-direction: row;
                align-items: center;
            }
            .points-progress {
                width: auto;
            }
            
            /* Adjust form layouts */
            .form-group {
                margin-bottom: 12px;
            }
            
            /* Adjust modal padding */
            .modal-body {
                padding: 12px;
            }
            
            /* Ensure tables don't overflow */
            table {
                min-width: 100%;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                width: 0;
                overflow: hidden;
                position: fixed;
                z-index: 1000;
                transform: translateX(-100%);
            }
            .sidebar.active {
                width: var(--sidebar-width);
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
            .menu-toggle {
                display: flex;
                position: fixed;
                top: 15px;
                left: 15px;
                z-index: 1001;
                background-color: var(--primary-color);
                color: white;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                border: none;
            }
            .menu-text, .user-info {
                display: block;
            }
            .content {
                padding: 12px;
            }
            .stats-cards {
                grid-template-columns: 1fr;
            }
            .approval-cards {
                grid-template-columns: 1fr;
            }
            .modal-content {
                width: 100%;
                max-width: 100%;
                border-radius: 0;
            }
            
            /* Stack action buttons vertically on small screens */
            .action-buttons {
                flex-direction: column;
                gap: 5px;
            }
            .action-btn {
                width: 100%;
            }
            
            /* Adjust form layouts for mobile */
            .form-group {
                margin-bottom: 10px;
            }
            
            /* Make buttons full width on mobile */
            .btn {
                width: 100%;
            }
            
            /* Adjust points summary layout */
            .points-summary {
                flex-direction: column;
                align-items: flex-start;
            }
            .points-progress {
                width: 100%;
            }
            
            /* Ensure no horizontal scrolling */
            html, body {
                overflow-x: hidden;
            }
            
            /* Fix for iOS viewport */
            @supports (-webkit-touch-callout: none) {
                body {
                    position: fixed;
                    width: 100%;
                    height: 100%;
                }
            }
			html, body {
    overflow-x: hidden;
    width: 100%;
  }
  
  .content {
    padding: 15px;
    width: 100%;
    max-width: 100%;
    box-sizing: border-box;
  }
}
        }

        /* Utility Classes */
        .hidden {
            display: none !important;
        }

        .text-red {
            color: var(--primary-color);
        }

        .text-black {
            color: var(--black);
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .mt-20 {
            margin-top: 20px;
        }

        /* Icons - Using Unicode characters as placeholders */
        .icon {
            font-style: normal;
            font-family: 'Segoe UI Symbol', sans-serif;
        }
        
        /* Queries Tab Styles */
        .queries-tab-content {
            display: none;
        }
        
        .queries-tab-content.active {
            display: block;
        }
        
        /* Campaign Form Styles */
        #categorySelection {
            display: none;
        }
        
        #scheduleDateGroup {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="brand-name"><a href="#" class="text-xl md:text-2xl font-bold"><img src="logo.jpg" alt="logo" width="200" height="60"></a></div>
            <div class="brand-subtitle">Management Portal</div>
        </div>
        <div class="menu">
            <div class="menu-item active" data-content="dashboard">
                <i class="icon">📊</i>
                <span class="menu-text">Dashboard Overview</span>
            </div>
            <div class="menu-item" data-content="users">
                <i class="icon">👥</i>
                <span class="menu-text">User Management</span>
            </div>
            <div class="menu-item" data-content="business">
                <i class="icon">🏢</i>
                <span class="menu-text">Business Management</span>
            </div>
            <div class="menu-item" data-content="reviews">
                <i class="icon">⭐</i>
                <span class="menu-text">Review Moderation</span>
            </div>
            <div class="menu-item" data-content="analytics">
                <i class="icon">📈</i>
                <span class="menu-text">Analytics & Reports</span>
            </div>
            <div class="menu-item" data-content="points">
                <i class="icon">🏆</i>
                <span class="menu-text">Points System</span>
            </div>
            <div class="menu-item" data-content="settings">
                <i class="icon">⚙️</i>
                <span class="menu-text">Settings</span>
            </div>
            <div class="menu-item" data-content="queries">
                <i class="icon">📩</i>
                <span class="menu-text">Queries</span>
            </div>
            <div class="menu-item" data-content="campaigns">
                <i class="icon">📢</i>
                <span class="menu-text">Campaigns</span>
            </div>
        </div>
        <div class="user-profile">
            <div class="user-avatar">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Smith">
            </div>
            <div class="user-info">
                <div class="user-name">John Smith</div>
                <div class="user-role">Super Admin</div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        <div class="navbar">
            <div class="search-bar">
                <i class="icon">🔍</i>
                <input type="text" placeholder="Search users, businesses, reviews...">
            </div>
            <div class="navbar-right">
                <div class="nav-icon">
                    🔔
                    <span class="notification-badge">5</span>
                </div>
                <div class="nav-icon">⚙️</div>
                <div class="nav-avatar">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Smith">
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="content">
            <!-- Dashboard Content -->
            <div id="dashboard-content" class="content-section active">
                <!-- Stats Cards -->
                <div class="stats-cards">
                    <div class="stat-card">
                        <div class="stat-icon">👥</div>
                        <div class="stat-title">Total Users</div>
                        <div class="stat-value">2,543</div>
                        <div class="stat-change positive">
                            <i class="icon">↑</i> 12% from last month
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🏢</div>
                        <div class="stat-title">Active Businesses</div>
                        <div class="stat-value">1,832</div>
                        <div class="stat-change positive">
                            <i class="icon">↑</i> 8% from last month
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">📝</div>
                        <div class="stat-title">Pending Reviews</div>
                        <div class="stat-value">342</div>
                        <div class="stat-change negative">
                            <i class="icon">↓</i> 5% from last month
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">💰</div>
                        <div class="stat-title">Monthly Revenue</div>
                        <div class="stat-value">$128.5K</div>
                        <div class="stat-change positive">
                            <i class="icon">↑</i> 22% from last month
                        </div>
                    </div>
                </div>

                <div class="dashboard-grid">
                    <div class="dashboard-main">
                        <!-- Recent User Signups -->
                        <div class="table-container">
                            <div class="table-header">
                                <h2 class="section-title">Recent User Signups</h2>
                                <a href="#" class="action-link">View All</a>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Registration Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sarah Johnson</td>
                                        <td>sarah@example.com</td>
                                        <td>Dec 12, 2023</td>
                                        <td><span class="status-badge status-active">Active</span></td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="action-btn view">View</button>
                                                <button class="action-btn suspend">Suspend</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michael Chen</td>
                                        <td>michael@example.com</td>
                                        <td>Dec 11, 2023</td>
                                        <td><span class="status-badge status-pending">Pending</span></td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="action-btn view">View</button>
                                                <button class="action-btn reject">Reject</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Emma Wilson</td>
                                        <td>emma@example.com</td>
                                        <td>Dec 11, 2023</td>
                                        <td><span class="status-badge status-active">Active</span></td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="action-btn view">View</button>
                                                <button class="action-btn suspend">Suspend</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>David Kim</td>
                                        <td>david@example.com</td>
                                        <td>Dec 10, 2023</td>
                                        <td><span class="status-badge status-suspended">Suspended</span></td>
                                        <td>
                                            <div class="action-buttons">
                                                <button class="action-btn view">View</button>
                                                <button class="action-btn activate">Activate</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pending Business Approvals -->
                        <div class="table-container">
                            <div class="table-header">
                                <h2 class="section-title">Pending Business Approvals</h2>
                                <a href="#" class="action-link">View All</a>
                            </div>
                            <div class="approval-cards">
                                <div class="approval-card">
                                    <div class="approval-title">MediCare Pharmaceuticals</div>
                                    <div class="approval-meta">New York, USA • Marketing • Submitted: Dec 10, 2023</div>
                                    <div class="approval-actions">
                                        <button class="btn btn-success btn-sm approve-business">Approve</button>
                                        <button class="btn btn-danger btn-sm reject-business">Reject</button>
                                        <button class="btn btn-secondary btn-sm view-business">View Details</button>
                                    </div>
                                </div>
                                <div class="approval-card">
                                    <div class="approval-title">BioTech Solutions</div>
                                    <div class="approval-meta">London, UK • Research • Submitted: Dec 9, 2023</div>
                                    <div class="approval-actions">
                                        <button class="btn btn-success btn-sm approve-business">Approve</button>
                                        <button class="btn btn-danger btn-sm reject-business">Reject</button>
                                        <button class="btn btn-secondary btn-sm view-business">View Details</button>
                                    </div>
                                </div>
                                <div class="approval-card">
                                    <div class="approval-title">PharmaPlus Distributors</div>
                                    <div class="approval-meta">Chicago, USA • Distribution • Submitted: Dec 8, 2023</div>
                                    <div class="approval-actions">
                                        <button class="btn btn-success btn-sm approve-business">Approve</button>
                                        <button class="btn btn-danger btn-sm reject-business">Reject</button>
                                        <button class="btn btn-secondary btn-sm view-business">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-sidebar">
                        <!-- Latest Reviews -->
                        <div class="table-container">
                            <div class="table-header">
                                <h2 class="section-title">Latest Reviews</h2>
                                <a href="#" class="action-link">View All</a>
                            </div>
                            <div class="review-cards">
                                <div class="review-card positive">
                                    <div class="review-header">
                                        <div class="review-user">David Lee</div>
                                        <div class="review-time">2 hours ago</div>
                                    </div>
                                    <div class="review-stars">★★★★★</div>
                                    <div class="review-text">
                                        Excellent service and fast delivery. The medication was exactly as described and arrived in perfect condition.
                                    </div>
                                    <div class="review-actions">
                                        <button class="btn btn-success btn-sm approve-review">Approve</button>
                                        <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                        <button class="btn btn-secondary btn-sm view-review">View</button>
                                    </div>
                                </div>
                                <div class="review-card">
                                    <div class="review-header">
                                        <div class="review-user">Rachel Green</div>
                                        <div class="review-time">5 hours ago</div>
                                    </div>
                                    <div class="review-stars">★★★☆☆</div>
                                    <div class="review-text">
                                        The product quality was good but the delivery took longer than expected. Customer service was helpful though.
                                    </div>
                                    <div class="review-actions">
                                        <button class="btn btn-success btn-sm approve-review">Approve</button>
                                        <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                        <button class="btn btn-secondary btn-sm view-review">View</button>
                                    </div>
                                </div>
                                <div class="review-card negative">
                                    <div class="review-header">
                                        <div class="review-user">Tom Wilson</div>
                                        <div class="review-time">1 day ago</div>
                                    </div>
                                    <div class="review-stars">★☆☆☆☆</div>
                                    <div class="review-text">
                                        Very disappointed with my purchase. The product arrived damaged and customer service was unresponsive.
                                    </div>
                                    <div class="review-actions">
                                        <button class="btn btn-success btn-sm approve-review">Approve</button>
                                        <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                        <button class="btn btn-secondary btn-sm view-review">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="table-container">
                            <div class="table-header">
                                <h2 class="section-title">Quick Actions</h2>
                            </div>
                            <div style="padding: 15px; display: grid; gap: 10px;">
                                <button class="btn btn-primary" id="addNewUserBtn">
                                    <i class="icon">➕</i> Add New User
                                </button>
                                <button class="btn btn-primary" id="addNewBusinessBtn">
                                    <i class="icon">🏢</i> Add Business
                                </button>
                                <button class="btn btn-black" id="generateReportBtn">
                                    <i class="icon">📊</i> Generate Report
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Management Content -->
            <div id="users-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">User Management</h1>
                    <button class="btn btn-primary" id="addUserBtn">
                        <i class="icon">➕</i> Add User
                    </button>
                </div>
                
                <!-- User Search and Filters -->
                <div class="table-container mb-20">
                    <div style="padding: 15px; display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Search Users</label>
                            <input type="text" class="form-control" id="userSearch" placeholder="Name, email, phone...">
                        </div>
                        <div class="form-group">
                            <label class="form-label">User Status</label>
                            <select class="form-control" id="userStatusFilter">
                                <option value="all">All Users</option>
                                <option value="active">Active</option>
                                <option value="pending">Pending</option>
                                <option value="suspended">Suspended</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Registration Date</label>
                            <select class="form-control" id="userDateFilter">
                                <option value="all">All Time</option>
                                <option value="7">Last 7 Days</option>
                                <option value="30">Last 30 Days</option>
                                <option value="90">Last 90 Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="apply-filters">
                        <button class="btn btn-primary" id="applyUserFilters">Apply Filters</button>
                    </div>
                </div>
                
                <!-- Users Table -->
                <div class="table-container">
                    <div class="table-header">
                        <h2 class="section-title">All Users (2,543)</h2>
                        <div>
                            <button class="btn btn-secondary btn-sm" id="exportUsersBtn">
                                <i class="icon">📄</i> Export
                            </button>
                        </div>
                    </div>
                    <table id="usersTable">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-status="active" data-date="2023-12-12">
                                <td>#USR-1001</td>
                                <td>Sarah Johnson</td>
                                <td>sarah@example.com</td>
                                <td>(555) 123-4567</td>
                                <td>Customer</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Suspend</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="pending" data-date="2023-12-11">
                                <td>#USR-1002</td>
                                <td>Michael Chen</td>
                                <td>michael@example.com</td>
                                <td>(555) 987-6543</td>
                                <td>Business Owner</td>
                                <td><span class="status-badge status-pending">Pending</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn reject">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="active" data-date="2023-12-11">
                                <td>#USR-1003</td>
                                <td>Emma Wilson</td>
                                <td>emma@example.com</td>
                                <td>(555) 456-7890</td>
                                <td>Customer</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Suspend</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="suspended" data-date="2023-12-10">
                                <td>#USR-1004</td>
                                <td>David Kim</td>
                                <td>david@example.com</td>
                                <td>(555) 789-0123</td>
                                <td>Business Owner</td>
                                <td><span class="status-badge status-suspended">Suspended</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn activate">Activate</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="active" data-date="2023-12-09">
                                <td>#USR-1005</td>
                                <td>Robert Taylor</td>
                                <td>robert@example.com</td>
                                <td>(555) 234-5678</td>
                                <td>Admin</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Suspend</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding: 12px 15px; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                        <div>Showing 1 to 5 of 2,543 entries</div>
                        <div style="display: flex; gap: 5px; flex-wrap: wrap;">
                            <button class="btn btn-secondary btn-sm">Previous</button>
                            <button class="btn btn-primary btn-sm">1</button>
                            <button class="btn btn-secondary btn-sm">2</button>
                            <button class="btn btn-secondary btn-sm">3</button>
                            <button class="btn btn-secondary btn-sm">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Business Management Content -->
            <div id="business-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">Business Management</h1>
                    <button class="btn btn-primary" id="addBusinessBtn">
                        <i class="icon">➕</i> Add Business
                    </button>
                </div>
                
                <!-- Business Filters -->
                <div class="table-container mb-20">
                    <div style="padding: 15px; display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Search Businesses</label>
                            <input type="text" class="form-control" id="businessSearch" placeholder="Name, category, location...">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Business Status</label>
                            <select class="form-control" id="businessStatusFilter">
                                <option value="all">All Businesses</option>
                                <option value="active">Active</option>
                                <option value="pending">Pending Approval</option>
                                <option value="suspended">Suspended</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Business Category</label>
                            <select class="form-control" id="businessCategoryFilter">
                                <option value="all">All Categories</option>
                                <option value="pharmacy">Pharmacy</option>
                                <option value="hospital">Hospital</option>
                                <option value="clinic">Clinic</option>
                                <option value="laboratory">Laboratory</option>
                                <option value="distributor">Distributor</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Location</label>
                            <select class="form-control" id="businessLocationFilter">
                                <option value="all">All Locations</option>
                                <option value="us">United States</option>
                                <option value="uk">United Kingdom</option>
                                <option value="ca">Canada</option>
                                <option value="au">Australia</option>
                                <option value="in">India</option>
                            </select>
                        </div>
                    </div>
                    <div class="apply-filters">
                        <button class="btn btn-primary" id="applyBusinessFilters">Apply Filters</button>
                    </div>
                </div>
                
                <!-- Businesses Table -->
                <div class="table-container">
                    <div class="table-header">
                        <h2 class="section-title">All Businesses (1,832)</h2>
                        <div>
                            <button class="btn btn-secondary btn-sm" id="exportBusinessesBtn">
                                <i class="icon">📄</i> Export
                            </button>
                        </div>
                    </div>
                    <table id="businessesTable">
                        <thead>
                            <tr>
                                <th>Business ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Owner</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-status="active" data-category="pharmacy" data-location="us">
                                <td>#BUS-5001</td>
                                <td>MediCare Pharmaceuticals</td>
                                <td>Pharmacy</td>
                                <td>New York, USA</td>
                                <td>Sarah Johnson</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Suspend</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="pending" data-category="laboratory" data-location="uk">
                                <td>#BUS-5002</td>
                                <td>BioTech Solutions</td>
                                <td>Laboratory</td>
                                <td>London, UK</td>
                                <td>Michael Chen</td>
                                <td><span class="status-badge status-pending">Pending</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn reject">Reject</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="active" data-category="hospital" data-location="us">
                                <td>#BUS-5003</td>
                                <td>City General Hospital</td>
                                <td>Hospital</td>
                                <td>Chicago, USA</td>
                                <td>Emma Wilson</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Suspend</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="suspended" data-category="distributor" data-location="ca">
                                <td>#BUS-5004</td>
                                <td>PharmaPlus Distributors</td>
                                <td>Distributor</td>
                                <td>Toronto, Canada</td>
                                <td>David Kim</td>
                                <td><span class="status-badge status-suspended">Suspended</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn activate">Activate</button>
                                    </div>
                                </td>
                            </tr>
                            <tr data-status="active" data-category="clinic" data-location="au">
                                <td>#BUS-5005</td>
                                <td>Wellness Clinic</td>
                                <td>Clinic</td>
                                <td>Sydney, Australia</td>
                                <td>Robert Taylor</td>
                                <td><span class="status-badge status-active">Active</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Suspend</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding: 12px 15px; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                        <div>Showing 1 to 5 of 1,832 entries</div>
                        <div style="display: flex; gap: 5px; flex-wrap: wrap;">
                            <button class="btn btn-secondary btn-sm">Previous</button>
                            <button class="btn btn-primary btn-sm">1</button>
                            <button class="btn btn-secondary btn-sm">2</button>
                            <button class="btn btn-secondary btn-sm">3</button>
                            <button class="btn btn-secondary btn-sm">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review Moderation Content -->
            <div id="reviews-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">Review Moderation</h1>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <button class="btn btn-secondary" id="reviewSettingsBtn">
                            <i class="icon">⚙️</i> Settings
                        </button>
                    </div>
                </div>
                
                <!-- Review Filters -->
                <div class="table-container mb-20">
                    <div style="padding: 15px; display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Search Reviews</label>
                            <input type="text" class="form-control" id="reviewSearch" placeholder="User, business, content...">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Review Status</label>
                            <select class="form-control" id="reviewStatusFilter">
                                <option value="all">All Reviews</option>
                                <option value="pending">Pending Approval</option>
                                <option value="approved">Approved</option>
                                <option value="rejected">Rejected</option>
                                <option value="flagged">Flagged</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Rating</label>
                            <select class="form-control" id="reviewRatingFilter">
                                <option value="all">All Ratings</option>
                                <option value="5">★★★★★</option>
                                <option value="4">★★★★☆</option>
                                <option value="3">★★★☆☆</option>
                                <option value="2">★★☆☆☆</option>
                                <option value="1">★☆☆☆☆</option>
                            </select>
                        </div>
                    </div>
                    <div class="apply-filters">
                        <button class="btn btn-primary" id="applyReviewFilters">Apply Filters</button>
                    </div>
                </div>
                
                <!-- Reviews List -->
                <div class="table-container">
                    <div class="table-header">
                        <h2 class="section-title">Reviews to Moderate (342)</h2>
                        <div>
                            <button class="btn btn-secondary btn-sm" id="exportReviewsBtn">
                                <i class="icon">📄</i> Export
                            </button>
                        </div>
                    </div>
                    <div class="review-cards" id="reviewsList">
                        <div class="review-card" data-status="pending" data-rating="5">
                            <div class="review-header">
                                <div>
                                    <div class="review-user">David Lee</div>
                                    <div class="review-time">For: MediCare Pharmaceuticals • 2 hours ago</div>
                                </div>
                                <div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                            </div>
                            <div class="review-stars">★★★★★</div>
                            <div class="review-text">
                                Excellent service and fast delivery. The medication was exactly as described and arrived in perfect condition. The staff was very helpful and knowledgeable. I would definitely recommend this pharmacy to others.
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-success btn-sm approve-review">Approve</button>
                                <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                <button class="btn btn-secondary btn-sm view-review">View Details</button>
                            </div>
                        </div>
                        <div class="review-card" data-status="pending" data-rating="3">
                            <div class="review-header">
                                <div>
                                    <div class="review-user">Rachel Green</div>
                                    <div class="review-time">For: BioTech Solutions • 5 hours ago</div>
                                </div>
                                <div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                            </div>
                            <div class="review-stars">★★★☆☆</div>
                            <div class="review-text">
                                The product quality was good but the delivery took longer than expected. Customer service was helpful though and resolved my issue promptly. The packaging could be improved to prevent damage during shipping.
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-success btn-sm approve-review">Approve</button>
                                <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                <button class="btn btn-secondary btn-sm view-review">View Details</button>
                            </div>
                        </div>
                        <div class="review-card negative" data-status="pending" data-rating="1">
                            <div class="review-header">
                                <div>
                                    <div class="review-user">Tom Wilson</div>
                                    <div class="review-time">For: City General Hospital • 1 day ago</div>
                                </div>
                                <div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                            </div>
                            <div class="review-stars">★☆☆☆☆</div>
                            <div class="review-text">
                                Very disappointed with my experience. The staff was rude and unprofessional. I waited for over two hours past my appointment time. The facilities were not clean and the equipment looked outdated. Would not recommend.
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-success btn-sm approve-review">Approve</button>
                                <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                <button class="btn btn-secondary btn-sm view-review">View Details</button>
                            </div>
                        </div>
                        <div class="review-card positive" data-status="pending" data-rating="5">
                            <div class="review-header">
                                <div>
                                    <div class="review-user">Lisa Brown</div>
                                    <div class="review-time">For: Wellness Clinic • 2 days ago</div>
                                </div>
                                <div>
                                    <span class="status-badge status-pending">Pending</span>
                                </div>
                            </div>
                            <div class="review-stars">★★★★★</div>
                            <div class="review-text">
                                Outstanding service! Dr. Smith was very thorough and took the time to explain everything clearly. The clinic was clean and modern. The reception staff was friendly and efficient. Best healthcare experience I've had in years.
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-success btn-sm approve-review">Approve</button>
                                <button class="btn btn-danger btn-sm reject-review">Reject</button>
                                <button class="btn btn-secondary btn-sm view-review">View Details</button>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 12px 15px; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                        <div>Showing 1 to 4 of 342 entries</div>
                        <div style="display: flex; gap: 5px; flex-wrap: wrap;">
                            <button class="btn btn-secondary btn-sm">Previous</button>
                            <button class="btn btn-primary btn-sm">1</button>
                            <button class="btn btn-secondary btn-sm">2</button>
                            <button class="btn btn-secondary btn-sm">3</button>
                            <button class="btn btn-secondary btn-sm">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Analytics & Reports Content -->
            <div id="analytics-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">Analytics & Reports</h1>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <button class="btn btn-primary" id="generateReportBtn2">
                            <i class="icon">📄</i> Generate Report
                        </button>
                        <button class="btn btn-secondary" id="analyticsSettingsBtn">
                            <i class="icon">⚙️</i> Settings
                        </button>
                    </div>
                </div>
                
                <!-- Date Range Selector -->
                <div class="table-container mb-20">
                    <div style="padding: 15px; display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Date Range</label>
                            <select class="form-control" id="dateRange">
                                <option value="7">Last 7 Days</option>
                                <option value="30" selected>Last 30 Days</option>
                                <option value="90">Last 90 Days</option>
                                <option value="365">This Year</option>
                                <option value="custom">Custom Range</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">From Date</label>
                            <input type="date" class="form-control" id="fromDate" disabled>
                        </div>
                        <div class="form-group">
                            <label class="form-label">To Date</label>
                            <input type="date" class="form-control" id="toDate" disabled>
                        </div>
                    </div>
                    <div class="apply-filters">
                        <button class="btn btn-primary" id="applyAnalyticsFilters">Apply Filters</button>
                    </div>
                </div>
                
                <!-- Key Metrics -->
                <div class="stats-cards mb-20">
                    <div class="stat-card">
                        <div class="stat-icon">👥</div>
                        <div class="stat-title">New Users</div>
                        <div class="stat-value" id="newUsersCount">247</div>
                        <div class="stat-change positive">
                            <i class="icon">↑</i> <span id="userChange">18</span>% from last period
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🏢</div>
                        <div class="stat-title">New Businesses</div>
                        <div class="stat-value" id="newBusinessesCount">132</div>
                        <div class="stat-change positive">
                            <i class="icon">↑</i> <span id="businessChange">7</span>% from last period
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">⭐</div>
                        <div class="stat-title">New Reviews</div>
                        <div class="stat-value" id="newReviewsCount">1,245</div>
                        <div class="stat-change positive">
                            <i class="icon">↑</i> <span id="reviewChange">22</span>% from last period
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="icon">💰</div>
                        <div class="stat-title">Revenue</div>
                        <div class="stat-value" id="revenueCount">$42,380</div>
                        <div class="stat-change positive">
                            <i class="icon">↑</i> <span id="revenueChange">15</span>% from last period
                        </div>
                    </div>
                </div>
                
                <!-- User Growth Chart -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h2 class="chart-title">User Growth</h2>
                        <div class="chart-actions">
                            <button class="btn btn-secondary btn-sm" data-chart="user-daily">Daily</button>
                            <button class="btn btn-secondary btn-sm" data-chart="user-weekly">Weekly</button>
                            <button class="btn btn-primary btn-sm" data-chart="user-monthly">Monthly</button>
                        </div>
                    </div>
                    <div class="chart-placeholder">
                        <div class="chart" id="userChart">
                            <div class="chart-bars">
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 30%;">
                                        <span class="chart-bar-value">75</span>
                                    </div>
                                    <div class="chart-bar-label">Jan</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 45%;">
                                        <span class="chart-bar-value">112</span>
                                    </div>
                                    <div class="chart-bar-label">Feb</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 60%;">
                                        <span class="chart-bar-value">150</span>
                                    </div>
                                    <div class="chart-bar-label">Mar</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 75%;">
                                        <span class="chart-bar-value">187</span>
                                    </div>
                                    <div class="chart-bar-label">Apr</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 90%;">
                                        <span class="chart-bar-value">225</span>
                                    </div>
                                    <div class="chart-bar-label">May</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 100%;">
                                        <span class="chart-bar-value">247</span>
                                    </div>
                                    <div class="chart-bar-label">Jun</div>
                                </div>
                            </div>
                            <div class="chart-x-axis">
                                <span>Monthly User Growth (Last 6 Months)</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Review Activity Chart -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h2 class="chart-title">Review Activity</h2>
                        <div class="chart-actions">
                            <button class="btn btn-secondary btn-sm" data-chart="review-rating">By Rating</button>
                            <button class="btn btn-secondary btn-sm" data-chart="review-category">By Category</button>
                            <button class="btn btn-primary btn-sm" data-chart="review-time">Over Time</button>
                        </div>
                    </div>
                    <div class="chart-placeholder">
                        <div class="pie-chart">
                            <div class="pie-chart-center">1,245</div>
                        </div>
                        <div class="chart-legend">
                            <div class="chart-legend-item">
                                <div class="chart-legend-color" style="background-color: #4A89DC;"></div>
                                <span>5 Stars (45%)</span>
                            </div>
                            <div class="chart-legend-item">
                                <div class="chart-legend-color" style="background-color: #5D9CEC;"></div>
                                <span>4 Stars (20%)</span>
                            </div>
                            <div class="chart-legend-item">
                                <div class="chart-legend-color" style="background-color: #48CFAD;"></div>
                                <span>3 Stars (15%)</span>
                            </div>
                            <div class="chart-legend-item">
                                <div class="chart-legend-color" style="background-color: #A0D468;"></div>
                                <span>2 Stars (12%)</span>
                            </div>
                            <div class="chart-legend-item">
                                <div class="chart-legend-color" style="background-color: #FFCE54;"></div>
                                <span>1 Star (8%)</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Business Metrics -->
                <div class="chart-container">
                    <div class="chart-header">
                        <h2 class="chart-title">Business Metrics</h2>
                        <div class="chart-actions">
                            <button class="btn btn-secondary btn-sm" data-chart="business-type">By Type</button>
                            <button class="btn btn-secondary btn-sm" data-chart="business-location">By Location</button>
                            <button class="btn btn-primary btn-sm" data-chart="business-growth">Growth</button>
                        </div>
                    </div>
                    <div class="chart-placeholder">
                        <div class="chart" id="businessChart">
                            <div class="chart-bars">
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 20%; background-color: #4A89DC;">
                                        <span class="chart-bar-value">25</span>
                                    </div>
                                    <div class="chart-bar-label">US</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 35%; background-color: #5D9CEC;">
                                        <span class="chart-bar-value">42</span>
                                    </div>
                                    <div class="chart-bar-label">UK</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 25%; background-color: #48CFAD;">
                                        <span class="chart-bar-value">30</span>
                                    </div>
                                    <div class="chart-bar-label">CA</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 15%; background-color: #A0D468;">
                                        <span class="chart-bar-value">18</span>
                                    </div>
                                    <div class="chart-bar-label">AU</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 10%; background-color: #FFCE54;">
                                        <span class="chart-bar-value">12</span>
                                    </div>
                                    <div class="chart-bar-label">IN</div>
                                </div>
                                <div class="chart-bar-container">
                                    <div class="chart-bar" style="height: 5%; background-color: #ED5565;">
                                        <span class="chart-bar-value">5</span>
                                    </div>
                                    <div class="chart-bar-label">Other</div>
                                </div>
                            </div>
                            <div class="chart-x-axis">
                                <span>New Businesses by Location (Last 30 Days)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Points System Content -->
            <div id="points-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">Points System</h1>
                </div>

                <div class="points-container">
                    <div class="points-header">
                        <h2 class="points-title">Your Points Summary</h2>
                    </div>
                    
                    <div class="points-summary">
                        <div class="points-level">Level 2: TechNovice</div>
                        <div class="points-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 65%;"></div>
                            </div>
                            <div class="progress-text">65 points earned (35 more to reach Level 3)</div>
                        </div>
                        <div class="points-total">Total: 65 points</div>
                    </div>
                    
                    <h3 style="margin-bottom: 15px;">Ways to Earn Points</h3>
                    
                    <div class="points-tasks">
                        <div class="task-card">
                            <div class="task-header">
                                <div class="task-title">Add LinkedIn Account</div>
                                <div class="task-points">+10 to +50 points</div>
                            </div>
                            <div class="task-description">
                                Connect your LinkedIn profile to verify your professional identity. Higher verification levels earn more points.
                            </div>
                            <div class="task-status">Completed: +30 points</div>
                        </div>
                        
                        <div class="task-card">
                            <div class="task-header">
                                <div class="task-title">Post Reviews with Images</div>
                                <div class="task-points">+5 to +15 points</div>
                            </div>
                            <div class="task-description">
                                Earn points for posting detailed reviews with images. Higher quality reviews earn more points.
                            </div>
                            <div class="task-status">Completed 3 times: +30 points</div>
                        </div>
                        
                        <div class="task-card">
                            <div class="task-header">
                                <div class="task-title">Post Reviews without Images</div>
                                <div class="task-points">+0 to +10 points</div>
                            </div>
                            <div class="task-description">
                                Earn points for posting text reviews. Points depend on review length and quality.
                            </div>
                            <div class="task-status">Completed 2 times: +10 points</div>
                        </div>
                        
                        <div class="task-card">
                            <div class="task-header">
                                <div class="task-title">Reply to Other User Reviews</div>
                                <div class="task-points">+0 to +5 points</div>
                            </div>
                            <div class="task-description">
                                Earn points for engaging with other users by replying to their reviews.
                            </div>
                            <div class="task-status">Not completed yet</div>
                        </div>
                        
                        <div class="task-card">
                            <div class="task-header">
                                <div class="task-title">Invite Users Who Post Reviews</div>
                                <div class="task-points">+2 points per review</div>
                            </div>
                            <div class="task-description">
                                Earn points when users you invite post approved reviews.
                            </div>
                            <div class="task-status">Earned: +10 points (5 reviews)</div>
                        </div>
                        
                        <div class="task-card">
                            <div class="task-header">
                                <div class="task-title">Get Replies to Your Reviews</div>
                                <div class="task-points">+0 to +5 points</div>
                            </div>
                            <div class="task-description">
                                Earn points when other users engage with your reviews by replying to them.
                            </div>
                            <div class="task-status">Earned: +5 points</div>
                        </div>
                    </div>
                    
                    <h3 style="margin-top: 25px; margin-bottom: 15px;">Level Benefits</h3>
                    
                    <table class="levels-table">
                        <thead>
                            <tr>
                                <th>Level</th>
                                <th>Points Required</th>
                                <th>Reply Access</th>
                                <th>Max Invites</th>
                                <th>Publishing Time</th>
                                <th>Other Benefits</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0: APPRENTIX</td>
                                <td>0</td>
                                <td>No</td>
                                <td>0</td>
                                <td>24h</td>
                                <td>Basic features</td>
                            </tr>
                            <tr>
                                <td>1: TechStarter</td>
                                <td>10</td>
                                <td>Limited</td>
                                <td>5</td>
                                <td>12h</td>
                                <td>Basic analytics</td>
                            </tr>
                            <tr class="current-level">
                                <td>2: TechNovice</td>
                                <td>50</td>
                                <td>Yes</td>
                                <td>10</td>
                                <td>6h</td>
                                <td>Advanced analytics</td>
                            </tr>
                            <tr>
                                <td>3: TechPro</td>
                                <td>100</td>
                                <td>Yes</td>
                                <td>20</td>
                                <td>3h</td>
                                <td>Priority support</td>
                            </tr>
                            <tr>
                                <td>4: TechMaster</td>
                                <td>200</td>
                                <td>Yes</td>
                                <td>50</td>
                                <td>1h</td>
                                <td>Featured listings</td>
                            </tr>
                            <tr>
                                <td>5: TechVivo</td>
                                <td>500</td>
                                <td>Yes</td>
                                <td>Unlimited</td>
                                <td>Immediate</td>
                                <td>VIP features</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Queries Content -->
            <div id="queries-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">Customer Queries</h1>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <button class="btn btn-secondary" id="exportQueriesBtn">
                            <i class="icon">📄</i> Export All
                        </button>
                        <button class="btn btn-secondary" id="refreshQueriesBtn">
                            <i class="icon">🔄</i> Refresh
                        </button>
                    </div>
                </div>

                <!-- Queries Tabs -->
                <div class="table-container mb-20">
                    <div style="padding: 15px; border-bottom: 1px solid var(--border-color);">
                        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <button class="btn btn-primary btn-md active" data-tab="orders">
                                <i class="icon">🛒</i> Orders
                            </button>
                            <button class="btn btn-secondary btn-md" data-tab="enquiries">
                                <i class="icon">✉️</i> Enquiries
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Orders Tab Content -->
                <div class="table-container queries-tab-content active" id="orders-tab">
                    <div class="table-header">
                        <h2 class="section-title">Recent Orders</h2>
                        <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                            <button class="btn btn-secondary btn-sm">
                                <i class="icon">📅</i> Filter by Date
                            </button>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Product</th>
                                <th>Customer</th>
                                <th>Date/Time</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-1001</td>
                                <td>Pharma Software License</td>
                                <td>Sarah Johnson</td>
                                <td>Dec 15, 2023 10:30 AM</td>
                                <td>$499.00</td>
                                <td><span class="status-badge status-active">Completed</span></td>
                                <td>
                                    <div class="action-buttons" style="gap: 6px;">
                                        <button class="action-btn view" style="padding: 6px 10px;">
                                            <i class="icon">👁️</i> View
                                        </button>
                                        <button class="action-btn edit" style="padding: 6px 10px;">
                                            <i class="icon">🖨️</i> Invoice
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-1002</td>
                                <td>Annual Subscription</td>
                                <td>Michael Chen</td>
                                <td>Dec 14, 2023 02:45 PM</td>
                                <td>$1,299.00</td>
                                <td><span class="status-badge status-pending">Processing</span></td>
                                <td>
                                    <div class="action-buttons" style="gap: 6px;">
                                        <button class="action-btn view" style="padding: 6px 10px;">
                                            <i class="icon">👁️</i> View
                                        </button>
                                        <button class="action-btn edit" style="padding: 6px 10px;">
                                            <i class="icon">🖨️</i> Invoice
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Enquiries Tab Content -->
                <div class="table-container queries-tab-content" id="enquiries-tab">
                    <div class="table-header">
                        <h2 class="section-title">Recent Enquiries</h2>
                        <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                            <button class="btn btn-secondary btn-sm">
                                <i class="icon">📅</i> Filter by Date
                            </button>
                            <button class="btn btn-secondary btn-sm">
                                <i class="icon">⚡</i> Show Urgent Only
                            </button>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Enquiry ID</th>
                                <th>Subject</th>
                                <th>Customer</th>
                                <th>Date/Time</th>
                                <th>Response Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ENQ-2001</td>
                                <td>Bulk Order Inquiry</td>
                                <td>David Kim</td>
                                <td>Dec 15, 2023 09:15 AM</td>
                                <td><span class="text-success">2 hours</span></td>
                                <td><span class="status-badge status-active">Responded</span></td>
                                <td>
                                    <div class="action-buttons" style="gap: 6px;">
                                        <button class="action-btn view" style="padding: 6px 10px;">
                                            <i class="icon">👁️</i> View
                                        </button>
                                        <button class="action-btn edit" style="padding: 6px 10px;">
                                            <i class="icon">✏️</i> Edit
                                        </button>
                                        <button class="action-btn activate" style="padding: 6px 10px;">
                                            <i class="icon">🔄</i> Resend
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#ENQ-2002</td>
                                <td>Custom Solution Query</td>
                                <td>Emma Wilson</td>
                                <td>Dec 14, 2023 04:30 PM</td>
                                <td><span class="text-danger">Pending</span></td>
                                <td><span class="status-badge status-pending">Pending</span></td>
                                <td>
                                    <div class="action-buttons" style="gap: 6px;">
                                        <button class="action-btn view" style="padding: 6px 10px;">
                                            <i class="icon">👁️</i> View
                                        </button>
                                        <button class="action-btn edit" style="padding: 6px 10px;">
                                            <i class="icon">✏️</i> Reply
                                        </button>
                                        <button class="action-btn suspend" style="padding: 6px 10px;">
                                            <i class="icon">⏸️</i> Mark Pending
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Campaigns Content -->
            <div id="campaigns-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">Email Campaigns</h1>
                    <button class="btn btn-primary" id="createCampaignBtn">
                        <i class="icon">➕</i> Create Campaign
                    </button>
                </div>

                <!-- Campaign Filters -->
                <div class="table-container mb-20">
                    <div style="padding: 15px; display: grid; grid-template-columns: 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Search Campaigns</label>
                            <input type="text" class="form-control" id="campaignSearch" placeholder="Name, subject...">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-control" id="campaignStatusFilter">
                                <option value="all">All Campaigns</option>
                                <option value="draft">Draft</option>
                                <option value="scheduled">Scheduled</option>
                                <option value="sent">Sent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Date Range</label>
                            <select class="form-control" id="campaignDateFilter">
                                <option value="all">All Time</option>
                                <option value="7">Last 7 Days</option>
                                <option value="30">Last 30 Days</option>
                            </select>
                        </div>
                    </div>
                    <div class="apply-filters">
                        <button class="btn btn-primary" id="applyCampaignFilters">Apply Filters</button>
                    </div>
                </div>

                <!-- Campaigns Table -->
                <div class="table-container">
                    <div class="table-header">
                        <h2 class="section-title">All Campaigns</h2>
                        <div>
                            <button class="btn btn-secondary btn-sm" id="exportCampaignsBtn">
                                <i class="icon">📄</i> Export
                            </button>
                        </div>
                    </div>
                    <table id="campaignsTable">
                        <thead>
                            <tr>
                                <th>Campaign ID</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Recipients</th>
                                <th>Status</th>
                                <th>Sent Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#CMP-3001</td>
                                <td>New Year Promotion</td>
                                <td>Special Discount for 2024</td>
                                <td>All Businesses</td>
                                <td><span class="status-badge status-active">Sent</span></td>
                                <td>Dec 1, 2023</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#CMP-3002</td>
                                <td>Product Update</td>
                                <td>New Features Available</td>
                                <td>Pharmacy Category</td>
                                <td><span class="status-badge status-pending">Scheduled</span></td>
                                <td>Dec 20, 2023</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn view">View</button>
                                        <button class="action-btn edit">Edit</button>
                                        <button class="action-btn suspend">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Create Campaign Modal -->
            <div class="modal" id="createCampaignModal">
                <div class="modal-content" style="max-width: 100%;">
                    <div class="modal-header">
                        <h2 class="modal-title">Create New Campaign</h2>
                        <button class="modal-close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="campaignForm">
                            <div class="form-group">
                                <label class="form-label">Campaign Name</label>
                                <input type="text" class="form-control" id="campaignName" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Subject</label>
                                <input type="text" class="form-control" id="campaignSubject" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Recipient Type</label>
                                <select class="form-control" id="recipientType" required>
                                    <option value="">Select Recipient Type</option>
                                    <option value="all">All Businesses</option>
                                    <option value="category">Specific Category</option>
                                    <option value="custom">Custom List</option>
                                </select>
                            </div>
                            <div class="form-group" id="categorySelection" style="display: none;">
                                <label class="form-label">Business Category</label>
                                <select class="form-control" id="businessCategory">
                                    <option value="pharmacy">Pharmacy</option>
                                    <option value="hospital">Hospital</option>
                                    <option value="clinic">Clinic</option>
                                    <option value="laboratory">Laboratory</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Content</label>
                                <textarea class="form-control" id="emailContent" rows="6" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Attachments</label>
                                <input type="file" class="form-control" id="campaignAttachment">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Schedule</label>
                                <select class="form-control" id="campaignSchedule">
                                    <option value="now">Send Immediately</option>
                                    <option value="schedule">Schedule for Later</option>
                                </select>
                            </div>
                            <div class="form-group" id="scheduleDateGroup" style="display: none;">
                                <label class="form-label">Schedule Date/Time</label>
                                <input type="datetime-local" class="form-control" id="scheduleDateTime">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" id="cancelCampaign">Cancel</button>
                        <button class="btn btn-primary" id="saveCampaign">Save Campaign</button>
                        <button class="btn btn-success" id="sendCampaign">Send Now</button>
                    </div>
                </div>
            </div>

            <!-- Settings Content -->
            <div id="settings-content" class="content-section">
                <div class="content-header">
                    <h1 class="page-title">System Settings</h1>
                </div>
                
                <div class="table-container">
                    <div style="padding: 15px;">
                        <h2 style="margin-bottom: 15px; color: var(--black);">Admin Preferences</h2>
                        
                        <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
                            <div>
                                <div class="form-group">
                                    <label class="form-label">Dashboard Theme</label>
                                    <select class="form-control" id="dashboardTheme">
                                        <option value="red-black">Red & Black (Default)</option>
                                        <option value="blue-white">Blue & White</option>
                                        <option value="dark">Dark Mode</option>
                                        <option value="light">Light Mode</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Default Page</label>
                                    <select class="form-control" id="defaultPage">
                                        <option value="dashboard">Dashboard Overview</option>
                                        <option value="users">User Management</option>
                                        <option value="business">Business Management</option>
                                        <option value="reviews">Review Moderation</option>
                                        <option value="analytics">Analytics & Reports</option>
                                        <option value="points">Points System</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Results Per Page</label>
                                    <select class="form-control" id="resultsPerPage">
                                        <option value="10">10</option>
                                        <option value="25" selected>25 (Default)</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div>
                                <div class="form-group">
                                    <label class="form-label">Notification Preferences</label>
                                    <div style="display: flex; flex-direction: column; gap: 8px;">
                                        <label style="display: flex; align-items: center; gap: 10px;">
                                            <input type="checkbox" id="notifUser" checked> New User Signups
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 10px;">
                                            <input type="checkbox" id="notifBusiness" checked> Business Approvals
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 10px;">
                                            <input type="checkbox" id="notifReview" checked> Pending Reviews
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 10px;">
                                            <input type="checkbox" id="notifSystem"> System Updates
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Notification Method</label>
                                    <div style="display: flex; flex-direction: column; gap: 8px;">
                                        <label style="display: flex; align-items: center; gap: 10px;">
                                            <input type="radio" name="notification" id="notifInApp" checked> In-App Only
                                        </label>
                                        <label style="display: flex; align-items: center; gap: 10px;">
                                            <input type="radio" name="notification" id="notifEmail"> Email Notifications
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div style="margin-top: 20px; display: flex; justify-content: flex-end; gap: 8px; flex-wrap: wrap;">
                            <button class="btn btn-secondary" id="cancelSettings">Cancel</button>
                            <button class="btn btn-primary" id="saveSettings">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Toggle (Hidden on Desktop) -->
    <div class="menu-toggle hidden">
        <i class="icon">≡</i>
    </div>

    <!-- Add User Modal -->
    <div class="modal" id="addUserModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Add New User</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form id="userForm">
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="userName" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="userPhone">
                    </div>
                    <div class="form-group">
                        <label class="form-label">User Type</label>
                        <select class="form-control" id="userType" required>
                            <option value="">Select User Type</option>
                            <option value="customer">Customer</option>
                            <option value="business">Business Owner</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" id="cancelUser">Cancel</button>
                <button class="btn btn-primary" id="saveUser">Save User</button>
            </div>
        </div>
    </div>

    <!-- Add Business Modal -->
    <div class="modal" id="addBusinessModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Add New Business</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <form id="businessForm">
                    <div class="form-group">
                        <label class="form-label">Business Name</label>
                        <input type="text" class="form-control" id="businessName" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <select class="form-control" id="businessCategory" required>
                            <option value="">Select Category</option>
                            <option value="pharmacy">Pharmacy</option>
                            <option value="hospital">Hospital</option>
                            <option value="clinic">Clinic</option>
                            <option value="laboratory">Laboratory</option>
                            <option value="distributor">Distributor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Location</label>
                        <select class="form-control" id="businessLocation" required>
                            <option value="">Select Location</option>
                            <option value="us">United States</option>
                            <option value="uk">United Kingdom</option>
                            <option value="ca">Canada</option>
                            <option value="au">Australia</option>
                            <option value="in">India</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Owner</label>
                        <select class="form-control" id="businessOwner" required>
                            <option value="">Select Owner</option>
                            <option value="1002">Michael Chen</option>
                            <option value="1004">David Kim</option>
                            <option value="1005">Robert Taylor</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="businessDescription" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" id="cancelBusiness">Cancel</button>
                <button class="btn btn-primary" id="saveBusiness">Save Business</button>
            </div>
        </div>
    </div>

    <!-- View Details Modal -->
    <div class="modal" id="detailsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="detailsModalTitle">Details</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body" id="detailsModalContent">
                <!-- Content will be loaded dynamically -->
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" id="closeDetails">Close</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menu Navigation
            const menuItems = document.querySelectorAll('.menu-item');
            const contentSections = document.querySelectorAll('.content-section');
            
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Remove active class from all menu items
                    menuItems.forEach(i => i.classList.remove('active'));
                    // Add active class to clicked item
                    this.classList.add('active');
                    
                    // Hide all content sections
                    contentSections.forEach(section => section.classList.remove('active'));
                    
                    // Show the selected content section
                    const contentId = this.getAttribute('data-content') + '-content';
                    document.getElementById(contentId).classList.add('active');
                    
                    // Close mobile sidebar if open
                    document.querySelector('.sidebar').classList.remove('active');
                    
                    // Scroll to top of content
                    document.querySelector('.content').scrollTo(0, 0);
                });
            });
            
            // Mobile Menu Toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const sidebar = document.querySelector('.sidebar');
            
            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
            });
            
            // Check screen size and show/hide menu toggle accordingly
            function checkScreenSize() {
                if (window.innerWidth <= 576) {
                    menuToggle.classList.remove('hidden');
                    sidebar.classList.remove('active');
                } else {
                    menuToggle.classList.add('hidden');
                    if (window.innerWidth <= 992) {
                        sidebar.classList.add('active');
                    } else {
                        sidebar.classList.remove('active');
                    }
                }
            }
            
            // Initial check
            checkScreenSize();
            
            // Add resize event listener
            window.addEventListener('resize', checkScreenSize);
            
            // Modal functionality
            const modals = document.querySelectorAll('.modal');
            const modalCloseButtons = document.querySelectorAll('.modal-close, .btn-secondary[id^="cancel"], .btn-secondary[id^="close"]');
            
            function openModal(modalId) {
                document.getElementById(modalId).style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }
            
            function closeModal(modalId) {
                document.getElementById(modalId).style.display = 'none';
                document.body.style.overflow = 'auto';
            }
            
            // Close modal when clicking on X or cancel button
            modalCloseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const modal = this.closest('.modal');
                    closeModal(modal.id);
                });
            });
            
            // Close modal when clicking outside modal content
            modals.forEach(modal => {
                modal.addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeModal(this.id);
                    }
                });
            });
            
            // Add New User functionality
            const addUserButtons = document.querySelectorAll('#addNewUserBtn, #addUserBtn');
            const addUserModal = document.getElementById('addUserModal');
            const saveUserBtn = document.getElementById('saveUser');
            
            addUserButtons.forEach(button => {
                button.addEventListener('click', function() {
                    openModal('addUserModal');
                });
            });
            
            saveUserBtn.addEventListener('click', function() {
                // In a real app, you would validate and save the user
                const userName = document.getElementById('userName').value;
                alert(`User "${userName}" has been added successfully!`);
                closeModal('addUserModal');
                document.getElementById('userForm').reset();
            });
            
            // Add New Business functionality
            const addBusinessButtons = document.querySelectorAll('#addNewBusinessBtn, #addBusinessBtn');
            const addBusinessModal = document.getElementById('addBusinessModal');
            const saveBusinessBtn = document.getElementById('saveBusiness');
            
            addBusinessButtons.forEach(button => {
                button.addEventListener('click', function() {
                    openModal('addBusinessModal');
                });
            });
            
            saveBusinessBtn.addEventListener('click', function() {
                // In a real app, you would validate and save the business
                const businessName = document.getElementById('businessName').value;
                alert(`Business "${businessName}" has been added successfully!`);
                closeModal('addBusinessModal');
                document.getElementById('businessForm').reset();
            });
            
            // View Details functionality
            const viewButtons = document.querySelectorAll('.action-btn.view, .view-business, .view-review');
            const detailsModal = document.getElementById('detailsModal');
            const detailsModalTitle = document.getElementById('detailsModalTitle');
            const detailsModalContent = document.getElementById('detailsModalContent');
            
            viewButtons.forEach(button => {
                button.addEventListener('click', function() {
                    let title = '';
                    let content = '';
                    
                    if (this.classList.contains('view-business')) {
                        const businessName = this.closest('.approval-card').querySelector('.approval-title').textContent;
                        const businessMeta = this.closest('.approval-card').querySelector('.approval-meta').textContent;
                        
                        title = `Business: ${businessName}`;
                        content = `
                            <div style="margin-bottom: 15px;">
                                <h3 style="margin-bottom: 8px;">${businessName}</h3>
                                <p style="color: var(--text-light); margin-bottom: 12px;">${businessMeta}</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl eget ultricies tincidunt, nisl nisl aliquam nisl, eget ultricies nisl nisl eget nisl.</p>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px;">Contact Information</h4>
                                <p><strong>Email:</strong> contact@${businessName.toLowerCase().replace(/\s+/g, '')}.com</p>
                                <p><strong>Phone:</strong> (555) 123-4567</p>
                                <p><strong>Address:</strong> 123 Business St, City, Country</p>
                            </div>
                        `;
                    } else if (this.classList.contains('view-review')) {
                        const reviewUser = this.closest('.review-card').querySelector('.review-user').textContent;
                        const reviewTime = this.closest('.review-card').querySelector('.review-time').textContent;
                        const reviewStars = this.closest('.review-card').querySelector('.review-stars').textContent;
                        const reviewText = this.closest('.review-card').querySelector('.review-text').textContent;
                        
                        title = `Review by ${reviewUser}`;
                        content = `
                            <div style="margin-bottom: 15px;">
                                <p style="color: var(--text-light); margin-bottom: 5px;">${reviewTime}</p>
                                <div style="color: #FFC107; font-size: 1.1rem; margin-bottom: 8px;">${reviewStars}</div>
                                <p style="line-height: 1.6;">${reviewText}</p>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px;">Additional Information</h4>
                                <p><strong>Business:</strong> ${reviewTime.split('For: ')[1].split(' • ')[0]}</p>
                                <p><strong>Review ID:</strong> #REV-${Math.floor(1000 + Math.random() * 9000)}</p>
                            </div>
                        `;
                    } else {
                        // Regular user view
                        const userName = this.closest('tr').querySelector('td:nth-child(2)').textContent;
                        const userEmail = this.closest('tr').querySelector('td:nth-child(3)').textContent;
                        const userPhone = this.closest('tr').querySelector('td:nth-child(4)').textContent;
                        const userType = this.closest('tr').querySelector('td:nth-child(5)').textContent;
                        const userStatus = this.closest('tr').querySelector('.status-badge').textContent;
                        
                        title = `User: ${userName}`;
                        content = `
                            <div style="display: flex; gap: 15px; margin-bottom: 15px;">
                                <div style="width: 60px; height: 60px; border-radius: 50%; background-color: #f0f0f0; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                                    ${userName.charAt(0)}
                                </div>
                                <div>
                                    <h3 style="margin-bottom: 5px;">${userName}</h3>
                                    <p style="color: var(--text-light); margin-bottom: 5px;">${userEmail}</p>
                                    <span class="status-badge ${userStatus.toLowerCase() === 'active' ? 'status-active' : userStatus.toLowerCase() === 'pending' ? 'status-pending' : 'status-suspended'}">${userStatus}</span>
                                </div>
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 15px;">
                                <div>
                                    <p style="color: var(--text-light); margin-bottom: 5px;">Phone</p>
                                    <p>${userPhone}</p>
                                </div>
                                <div>
                                    <p style="color: var(--text-light); margin-bottom: 5px;">User Type</p>
                                    <p>${userType}</p>
                                </div>
                                <div>
                                    <p style="color: var(--text-light); margin-bottom: 5px;">Registration Date</p>
                                    <p>Dec ${Math.floor(10 + Math.random() * 10)}, 2023</p>
                                </div>
                                <div>
                                    <p style="color: var(--text-light); margin-bottom: 5px;">Last Active</p>
                                    <p>${Math.random() > 0.3 ? 'Today' : 'Yesterday'}</p>
                                </div>
                            </div>
                        `;
                    }
                    
                    detailsModalTitle.textContent = title;
                    detailsModalContent.innerHTML = content;
                    openModal('detailsModal');
                });
            });
            
            // Edit functionality
            const editButtons = document.querySelectorAll('.action-btn.edit');
            
            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const userName = this.closest('tr').querySelector('td:nth-child(2)').textContent;
                    alert(`Edit functionality for "${userName}" would open an edit form in a real application.`);
                });
            });
            
            // Status change functionality (Suspend/Activate/Reject)
            const statusButtons = document.querySelectorAll('.action-btn.suspend, .action-btn.activate, .action-btn.reject, .approve-business, .reject-business, .approve-review, .reject-review');
            
            statusButtons.forEach(button => {
                button.addEventListener('click', function() {
                    let itemName = '';
                    let action = '';
                    
                    if (this.classList.contains('approve-business') || this.classList.contains('reject-business')) {
                        itemName = this.closest('.approval-card').querySelector('.approval-title').textContent;
                        action = this.classList.contains('approve-business') ? 'approve' : 'reject';
                    } else if (this.classList.contains('approve-review') || this.classList.contains('reject-review')) {
                        itemName = this.closest('.review-card').querySelector('.review-user').textContent + "'s review";
                        action = this.classList.contains('approve-review') ? 'approve' : 'reject';
                    } else {
                        itemName = this.closest('tr').querySelector('td:nth-child(2)').textContent;
                        action = this.classList.contains('suspend') ? 'suspend' : 
                                this.classList.contains('activate') ? 'activate' : 'reject';
                    }
                    
                    if (confirm(`Are you sure you want to ${action} ${itemName}?`)) {
                        alert(`Successfully ${action}d ${itemName}`);
                        
                        // In a real app, you would update the UI or make an API call
                        if (this.classList.contains('approve-business') || this.classList.contains('reject-business') || 
                            this.classList.contains('approve-review') || this.classList.contains('reject-review')) {
                            this.closest('.approval-card, .review-card').style.opacity = '0';
                            setTimeout(() => {
                                this.closest('.approval-card, .review-card').remove();
                            }, 300);
                        }
                    }
                });
            });
            
            // Filter functionality
            function applyFilters(tableId, searchId, filters) {
                const table = document.getElementById(tableId);
                const searchInput = document.getElementById(searchId).value.toLowerCase();
                const rows = table.querySelectorAll('tbody tr');
                
                rows.forEach(row => {
                    let showRow = true;
                    const rowText = row.textContent.toLowerCase();
                    
                    // Apply search filter
                    if (searchInput && !rowText.includes(searchInput)) {
                        showRow = false;
                    }
                    
                    // Apply other filters
                    for (const [filterName, filterValue] of Object.entries(filters)) {
                        if (filterValue && filterValue !== 'all') {
                            const rowValue = row.getAttribute(`data-${filterName}`);
                            if (rowValue && rowValue !== filterValue) {
                                showRow = false;
                            }
                        }
                    }
                    
                    row.style.display = showRow ? '' : 'none';
                });
            }
            
            // User filters
            document.getElementById('applyUserFilters').addEventListener('click', function() {
                const filters = {
                    status: document.getElementById('userStatusFilter').value,
                    date: document.getElementById('userDateFilter').value
                };
                applyFilters('usersTable', 'userSearch', filters);
            });
            
            // Business filters
            document.getElementById('applyBusinessFilters').addEventListener('click', function() {
                const filters = {
                    status: document.getElementById('businessStatusFilter').value,
                    category: document.getElementById('businessCategoryFilter').value,
                    location: document.getElementById('businessLocationFilter').value
                };
                applyFilters('businessesTable', 'businessSearch', filters);
            });
            
            // Review filters
            document.getElementById('applyReviewFilters').addEventListener('click', function() {
                const searchInput = document.getElementById('reviewSearch').value.toLowerCase();
                const statusFilter = document.getElementById('reviewStatusFilter').value;
                const ratingFilter = document.getElementById('reviewRatingFilter').value;
                const reviews = document.querySelectorAll('#reviewsList .review-card');
                
                reviews.forEach(review => {
                    let showReview = true;
                    const reviewText = review.textContent.toLowerCase();
                    
                    // Apply search filter
                    if (searchInput && !reviewText.includes(searchInput)) {
                        showReview = false;
                    }
                    
                    // Apply status filter
                    if (statusFilter !== 'all' && review.getAttribute('data-status') !== statusFilter) {
                        showReview = false;
                    }
                    
                    // Apply rating filter
                    if (ratingFilter !== 'all' && review.getAttribute('data-rating') !== ratingFilter) {
                        showReview = false;
                    }
                    
                    review.style.display = showReview ? '' : 'none';
                });
            });
            
            // Analytics filters
            document.getElementById('applyAnalyticsFilters').addEventListener('click', function() {
                const dateRange = document.getElementById('dateRange').value;
                
                // These values would normally come from an API
                const data = {
                    '7': { users: 85, businesses: 42, reviews: 320, revenue: 12500, change: 5 },
                    '30': { users: 247, businesses: 132, reviews: 1245, revenue: 42380, change: 15 },
                    '90': { users: 685, businesses: 342, reviews: 3520, revenue: 118500, change: 22 },
                    '365': { users: 2543, businesses: 1832, reviews: 12450, revenue: 485200, change: 35 }
                };
                
                const selectedData = data[dateRange] || data['30'];
                
                document.getElementById('newUsersCount').textContent = selectedData.users;
                document.getElementById('newBusinessesCount').textContent = selectedData.businesses;
                document.getElementById('newReviewsCount').textContent = selectedData.reviews.toLocaleString();
                document.getElementById('revenueCount').textContent = '$' + selectedData.revenue.toLocaleString();
                
                document.querySelectorAll('.stat-change span').forEach(span => {
                    span.textContent = selectedData.change;
                });
            });
            
            // Analytics chart buttons
            const chartButtons = document.querySelectorAll('.chart-actions button');
            chartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove primary class from all buttons in this group
                    this.parentNode.querySelectorAll('button').forEach(btn => {
                        btn.classList.remove('btn-primary');
                        btn.classList.add('btn-secondary');
                    });
                    
                    // Add primary class to clicked button
                    this.classList.remove('btn-secondary');
                    this.classList.add('btn-primary');
                    
                    // In a real app, you would update the chart here
                    const chartType = this.getAttribute('data-chart');
                    console.log(`Switched to ${chartType} view`);
                });
            });
            
            // Export buttons
            const exportButtons = document.querySelectorAll('[id^="export"]');
            exportButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const exportType = this.id.includes('Users') ? 'Users' : 
                                      this.id.includes('Businesses') ? 'Businesses' : 
                                      this.id.includes('Reviews') ? 'Reviews' : 
                                      this.id.includes('Queries') ? 'Queries' : 'Campaigns';
                    alert(`Exporting ${exportType} data as CSV`);
                });
            });
            
            // Generate Report buttons
            const generateReportButtons = document.querySelectorAll('[id^="generateReport"]');
            generateReportButtons.forEach(button => {
                button.addEventListener('click', function() {
                    alert('Generating comprehensive report... This would download a PDF in a real application.');
                });
            });
            
            // Settings functionality
            const saveSettingsBtn = document.getElementById('saveSettings');
            const cancelSettingsBtn = document.getElementById('cancelSettings');
            
            saveSettingsBtn.addEventListener('click', function() {
                const theme = document.getElementById('dashboardTheme').value;
                const defaultPage = document.getElementById('defaultPage').value;
                const resultsPerPage = document.getElementById('resultsPerPage').value;
                
                // Apply theme (simplified example)
                if (theme === 'dark') {
                    document.body.style.backgroundColor = '#1A1A1A';
                    document.body.style.color = '#FFFFFF';
                } else if (theme === 'light') {
                    document.body.style.backgroundColor = '#FFFFFF';
                    document.body.style.color = '#333333';
                } else {
                    // Reset to default
                    document.body.style.backgroundColor = '';
                    document.body.style.color = '';
                }
                
                // Show success message
                alert('Settings saved successfully!');
                
                // In a real app, you would save these to localStorage or send to server
                console.log('Saved settings:', {
                    theme,
                    defaultPage,
                    resultsPerPage,
                    notifications: {
                        user: document.getElementById('notifUser').checked,
                        business: document.getElementById('notifBusiness').checked,
                        review: document.getElementById('notifReview').checked,
                        system: document.getElementById('notifSystem').checked,
                        method: document.getElementById('notifEmail').checked ? 'email' : 'in-app'
                    }
                });
            });
            
            cancelSettingsBtn.addEventListener('click', function() {
                // Reset form to default values
                document.getElementById('dashboardTheme').value = 'red-black';
                document.getElementById('defaultPage').value = 'dashboard';
                document.getElementById('resultsPerPage').value = '25';
                document.getElementById('notifUser').checked = true;
                document.getElementById('notifBusiness').checked = true;
                document.getElementById('notifReview').checked = true;
                document.getElementById('notifSystem').checked = false;
                document.getElementById('notifInApp').checked = true;
            });
            
            // Queries Tab Switching
            document.querySelectorAll('[data-tab]').forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Update active tab button
                    document.querySelectorAll('[data-tab]').forEach(t => {
                        t.classList.remove('btn-primary');
                        t.classList.add('btn-secondary');
                    });
                    this.classList.remove('btn-secondary');
                    this.classList.add('btn-primary');
                    
                    // Show selected tab content
                    document.querySelectorAll('.queries-tab-content').forEach(content => {
                        content.classList.remove('active');
                    });
                    document.getElementById(`${tabId}-tab`).classList.add('active');
                });
            });

            // Campaign Modal Toggle
            document.getElementById('createCampaignBtn').addEventListener('click', function() {
                openModal('createCampaignModal');
            });

            // Recipient Type Toggle
            document.getElementById('recipientType').addEventListener('change', function() {
                document.getElementById('categorySelection').style.display = 
                    this.value === 'category' ? 'block' : 'none';
            });

            // Schedule Toggle
            document.getElementById('campaignSchedule').addEventListener('change', function() {
                document.getElementById('scheduleDateGroup').style.display = 
                    this.value === 'schedule' ? 'block' : 'none';
            });

            // Save Campaign
            document.getElementById('saveCampaign').addEventListener('click', function() {
                alert('Campaign saved successfully!');
                closeModal('createCampaignModal');
            });

            // Send Campaign
            document.getElementById('sendCampaign').addEventListener('click', function() {
                if (confirm('Are you sure you want to send this campaign now?')) {
                    alert('Campaign sent successfully!');
                    closeModal('createCampaignModal');
                }
            });
            
            // Campaign filters
            document.getElementById('applyCampaignFilters').addEventListener('click', function() {
                const searchInput = document.getElementById('campaignSearch').value.toLowerCase();
                const statusFilter = document.getElementById('campaignStatusFilter').value;
                const dateFilter = document.getElementById('campaignDateFilter').value;
                const rows = document.querySelectorAll('#campaignsTable tbody tr');
                
                rows.forEach(row => {
                    let showRow = true;
                    const rowText = row.textContent.toLowerCase();
                    
                    // Apply search filter
                    if (searchInput && !rowText.includes(searchInput)) {
                        showRow = false;
                    }
                    
                    // Apply status filter
                    if (statusFilter !== 'all') {
                        const status = row.querySelector('.status-badge').textContent.toLowerCase();
                        if (statusFilter === 'sent' && status !== 'sent') {
                            showRow = false;
                        } else if (statusFilter === 'scheduled' && status !== 'scheduled') {
                            showRow = false;
                        } else if (statusFilter === 'draft' && status !== 'draft') {
                            showRow = false;
                        }
                    }
                    
                    // Apply date filter (simplified example)
                    if (dateFilter !== 'all') {
                        // In a real app, you would compare dates
                    }
                    
                    row.style.display = showRow ? '' : 'none';
                });
            });
        });
    </script>
</body>
</html><?php /**PATH C:\KajalProjects\SCIZORA\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
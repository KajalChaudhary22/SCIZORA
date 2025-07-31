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
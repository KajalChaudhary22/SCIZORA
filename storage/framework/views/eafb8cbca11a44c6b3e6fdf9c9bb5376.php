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
            </div><?php /**PATH D:\Projects\SCIZORA\resources\views/admin/businessmanagement/usermanagement.blade.php ENDPATH**/ ?>
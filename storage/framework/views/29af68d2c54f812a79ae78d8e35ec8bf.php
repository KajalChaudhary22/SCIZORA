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
            <?php /**PATH D:\Projects\SCIZORA\resources\views/admin/businessmanagement/settings.blade.php ENDPATH**/ ?>
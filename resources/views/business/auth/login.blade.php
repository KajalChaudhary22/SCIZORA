<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCIZORA - Pharmaceutical Marketplace</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        .form-container {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }
        /* Added custom purple color styles */
        .text-purple-primary { color: #1544da; }
        .bg-purple-primary { background-color: #1544da; }
        .hover\:bg-purple-700:hover { background-color: #5a0a9d; }
        .ring-purple-primary { --tw-ring-color: rgba(106, 13, 173, var(--tw-ring-opacity)); }
        .border-purple-primary { border-color: #1544da; }
        .focus\:ring-purple-primary:focus { --tw-ring-color: rgba(106, 13, 173, var(--tw-ring-opacity)); }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Top Navigation Bar -->
    <nav class="bg-white py-4 px-6 border-b border-gray-200">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <a href="../index.html">
                    <h1 class="text-2xl font-bold">
                        <a href="#" class="text-xl md:text-2xl font-bold"><img src="logo.jpg" alt="logo" width="200" height="60"></a>
                    </h1>
                </a>
            </div>
            <div class="flex items-center space-x-6">
                <div class="relative">
                    <select class="bg-white text-gray-700 border border-gray-300 text-sm rounded px-3 py-1 appearance-none focus:outline-none focus:ring-1 focus:ring-purple-primary">
                        <option>English</option>
                        <option>Español</option>
                        <option>Français</option>
                        <option>Deutsch</option>
                    </select>
                    <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-xs text-gray-500 pointer-events-none"></i>
                </div>
                <a href="#" class="text-gray-700 hover:text-purple-primary text-sm font-medium transition">Contact Support</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8 md:py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Side - Registration Form -->
            <div class="w-full lg:w-1/2 bg-white form-container rounded-lg p-6 md:p-8 border border-gray-100">
                <div class="mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800">Register Your Business</h2>
                    <p class="text-gray-600">Join the leading pharmaceutical marketplace</p>
                </div>
                
                <form id="registrationForm" class="space-y-4">
                    <div>
                        <label for="businessName" class="block text-sm font-medium mb-1 text-gray-700">Business Name</label>
                        <input type="text" id="businessName" name="businessName" 
                            class="w-full bg-white border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-primary focus:border-transparent transition text-gray-700"
                            required>
                        <p class="text-red-500 text-xs mt-1 hidden" id="businessNameError">Business name is required</p>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium mb-1 text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" 
                            class="w-full bg-white border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-primary focus:border-transparent transition text-gray-700"
                            required>
                        <p class="text-red-500 text-xs mt-1 hidden" id="emailError">Please enter a valid email address</p>
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium mb-1 text-gray-700">Phone Number</label>
                        <input type="tel" id="phone" name="phone" 
                            class="w-full bg-white border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-primary focus:border-transparent transition text-gray-700"
                            required>
                        <p class="text-red-500 text-xs mt-1 hidden" id="phoneError">Please enter a valid phone number</p>
                    </div>
                    
                    <div>
                        <label for="industry" class="block text-sm font-medium mb-1 text-gray-700">Industry Category</label>
                        <select id="industry" name="industry" 
                            class="w-full bg-white border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-primary focus:border-transparent transition appearance-none text-gray-700"
                            required>
							<option value="" disabled selected>Select category</option>
                            <option value="Antibodies">Antibodies</option>
        <option value="Assay Kits & Reagents">Assay Kits & Reagents</option>
        <option value="Cell & Tissue Culture">Cell & Tissue Culture</option>
        <option value="Genomics & Proteomics">Genomics & Proteomics</option>
        <option value="Molecular Biology">Molecular Biology</option>
        <option value="Drug Discovery">Drug Discovery</option>
        <option value="Clinical Diagnostics">Clinical Diagnostics</option>
        <option value="Lab Equipment & Instruments">Lab Equipment & Instruments</option>
        <option value="Lab Automation & Informatics">Lab Automation & Informatics</option>
        <option value="Chemicals & Reagents">Chemicals & Reagents</option>
        <option value="Microscopy & Imaging">Microscopy & Imaging</option>
		<option value="Life Sciences">Life Sciences</option>
        <option value="Environmental">Environmental</option>
        <option value="Materials">Materials</option>
        <option value="Food & Beverage">Food & Beverage</option>
        <option value="General Lab">General Lab</option>
        <option value="Lab Automation">Lab Automation</option>
        <option value="Lab Informatics">Lab Informatics</option>
        <option value="Separations">Separations</option>
        <option value="Spectroscopy">Spectroscopy</option>
        <option value="Forensics">Forensics</option>
        <option value="Cannabis Testing">Cannabis Testing</option>
                        </select>
                        <p class="text-red-500 text-xs mt-1 hidden" id="industryError">Please select an industry category</p>
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium mb-1 text-gray-700">Password</label>
                        <input type="password" id="password" name="password" 
                            class="w-full bg-white border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-primary focus:border-transparent transition text-gray-700"
                            required minlength="8">
                        <p class="text-red-500 text-xs mt-1 hidden" id="passwordError">Password must be at least 8 characters</p>
                    </div>
                    
                    <div>
                        <label for="confirmPassword" class="block text-sm font-medium mb-1 text-gray-700">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" 
                            class="w-full bg-white border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-primary focus:border-transparent transition text-gray-700"
                            required>
                        <p class="text-red-500 text-xs mt-1 hidden" id="confirmPasswordError">Passwords do not match</p>
                    </div>
                    
                    <button type="submit" 
                        class="w-full bg-purple-primary hover:bg-purple-700 text-white font-medium py-2 px-4 rounded-md transition duration-300 transform hover:scale-105 shadow-sm">
                        Create Account
                    </button>
                    
                    <p class="text-xs text-gray-500 text-center mt-4">
                        By registering, you agree to our <a href="#" class="text-purple-primary hover:underline">Terms of Service</a> and <a href="#" class="text-purple-primary hover:underline">Privacy Policy</a>
                    </p>
                </form>
                
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <div class="flex flex-wrap justify-center gap-4 md:gap-6 mb-4">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-shield-alt text-purple-primary"></i>
                            <span class="text-xs text-gray-600">Secure Platform</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-check-circle text-purple-primary"></i>
                            <span class="text-xs text-gray-600">Verified Businesses</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-certificate text-purple-primary"></i>
                            <span class="text-xs text-gray-600">Industry Compliance</span>
                        </div>
                    </div>
                    <p class="text-center text-sm text-gray-500">Trusted by 1000+ pharmaceutical companies</p>
                </div>
            </div>
            
            <!-- Right Side - Login Form -->
            <div class="w-full lg:w-1/2 bg-white form-container rounded-lg p-6 md:p-8 border border-gray-100">
                <div class="mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800">Welcome Back</h2>
                    <p class="text-gray-600">Login to your business account</p>
                </div>
                
                <form id="loginForm" class="space-y-4">
                    <div>
                        <label for="loginEmail" class="block text-sm font-medium mb-1 text-gray-700">Email Address</label>
                        <input type="email" id="loginEmail" name="loginEmail" 
                            class="w-full bg-white border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-primary focus:border-transparent transition text-gray-700"
                            required>
                        <p class="text-red-500 text-xs mt-1 hidden" id="loginEmailError">Please enter a valid email address</p>
                    </div>
                    
                    <div>
                        <label for="loginPassword" class="block text-sm font-medium mb-1 text-gray-700">Password</label>
                        <input type="password" id="loginPassword" name="loginPassword" 
                            class="w-full bg-white border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-primary focus:border-transparent transition text-gray-700"
                            required>
                        <p class="text-red-500 text-xs mt-1 hidden" id="loginPasswordError">Password is required</p>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="rememberMe" name="rememberMe" class="h-4 w-4 text-purple-primary focus:ring-purple-primary border-gray-300 rounded">
                            <label for="rememberMe" class="ml-2 block text-sm text-gray-600">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-purple-primary hover:underline">Forgot Password?</a>
                    </div>
                    
                    <button type="submit" 
                        class="w-full bg-purple-primary hover:bg-purple-700 text-white font-medium py-2 px-4 rounded-md transition duration-300 transform hover:scale-105 shadow-sm">
                        Login
                    </button>
                    
                    <p class="text-center text-sm text-gray-500 mt-4">
                        <a href="#" class="text-purple-primary hover:underline">Need Help? Contact Support</a>
                    </p>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white text-gray-600 py-8 px-4 md:px-6 border-t border-gray-200">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4"><a href="#" class="text-xl md:text-2xl font-bold"><img src="logo.jpg" alt="logo" width="200" height="60"></a></h3>
                    <p class="text-sm">LabZora is the leading pharmaceutical marketplace connecting businesses across the supply chain. Our platform facilitates secure transactions and partnerships in the global pharmaceutical industry.</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-purple-primary transition">Home</a></li>
                        <li><a href="#" class="hover:text-purple-primary transition">About Us</a></li>
                        <li><a href="#" class="hover:text-purple-primary transition">Services</a></li>
                        <li><a href="#" class="hover:text-purple-primary transition">Contact</a></li>
                        <li><a href="#" class="hover:text-purple-primary transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-purple-primary transition">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Contact</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-purple-primary"></i>
                            <span>support@LabZora.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-2 text-purple-primary"></i>
                            <span>+1 (800) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2 text-purple-primary"></i>
                            <span>123 Pharma Street, Boston, MA 02115</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-200 mt-8 pt-6 text-center text-sm">
                <p>© 2025 LabZora. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Registration Form Validation
        const registrationForm = document.getElementById('registrationForm');
        const loginForm = document.getElementById('loginForm');

        if (registrationForm) {
            registrationForm.addEventListener('submit', function(e) {
                e.preventDefault();
                let isValid = true;

                // Validate Business Name
                const businessName = document.getElementById('businessName');
                const businessNameError = document.getElementById('businessNameError');
                if (!businessName.value.trim()) {
                    businessNameError.classList.remove('hidden');
                    isValid = false;
                } else {
                    businessNameError.classList.add('hidden');
                }

                // Validate Email
                const email = document.getElementById('email');
                const emailError = document.getElementById('emailError');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email.value)) {
                    emailError.classList.remove('hidden');
                    isValid = false;
                } else {
                    emailError.classList.add('hidden');
                }

                // Validate Phone
                const phone = document.getElementById('phone');
                const phoneError = document.getElementById('phoneError');
                const phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
                if (!phoneRegex.test(phone.value)) {
                    phoneError.classList.remove('hidden');
                    isValid = false;
                } else {
                    phoneError.classList.add('hidden');
                }

                // Validate Industry
                const industry = document.getElementById('industry');
                const industryError = document.getElementById('industryError');
                if (!industry.value) {
                    industryError.classList.remove('hidden');
                    isValid = false;
                } else {
                    industryError.classList.add('hidden');
                }

                // Validate Password
                const password = document.getElementById('password');
                const passwordError = document.getElementById('passwordError');
                if (password.value.length < 8) {
                    passwordError.classList.remove('hidden');
                    isValid = false;
                } else {
                    passwordError.classList.add('hidden');
                }

                // Validate Confirm Password
                const confirmPassword = document.getElementById('confirmPassword');
                const confirmPasswordError = document.getElementById('confirmPasswordError');
                if (confirmPassword.value !== password.value) {
                    confirmPasswordError.classList.remove('hidden');
                    isValid = false;
                } else {
                    confirmPasswordError.classList.add('hidden');
                }

                if (isValid) {
                    // Form is valid, submit it
                    alert('Registration form submitted successfully!');
                    registrationForm.reset();
                }
            });
        }

        // Login Form Validation
        if (loginForm) {
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                let isValid = true;

                // Validate Email
                const loginEmail = document.getElementById('loginEmail');
                const loginEmailError = document.getElementById('loginEmailError');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(loginEmail.value)) {
                    loginEmailError.classList.remove('hidden');
                    isValid = false;
                } else {
                    loginEmailError.classList.add('hidden');
                }

                // Validate Password
                const loginPassword = document.getElementById('loginPassword');
                const loginPasswordError = document.getElementById('loginPasswordError');
                if (!loginPassword.value) {
                    loginPasswordError.classList.remove('hidden');
                    isValid = false;
                } else {
                    loginPasswordError.classList.add('hidden');
                }

                if (isValid) {
                    // Form is valid, submit it
                    alert('Login form submitted successfully!');
                    loginForm.reset();
                }
            });
        }
    </script>
</body>
</html>
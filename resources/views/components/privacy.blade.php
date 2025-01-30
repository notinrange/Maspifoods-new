@extends('components/layout')
@section('content')

<!-- Main Container -->
<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
    <!-- Effective Date -->
    <div>
        <p class="text-gray-600 text-sm"><strong>Effective Date:</strong> 27 October 2024</p>
    </div>

    <!-- Header -->
    <h1 class="text-2xl font-bold text-gray-800 mt-4">Privacy Policy</h1>

    <!-- Policy Description -->
    <p class="mt-4 text-gray-700">
        At <strong>Maspifoods.com</strong>, a brand owned by <strong>Liaisonec Foods Pvt Ltd</strong>, we are committed to safeguarding 
        the privacy of our customers and visitors. This Privacy Policy outlines the types of personal information we collect, 
        how we use it, and how we protect it. By accessing or using our website, you consent to the practices described in this policy.
    </p>

    <!-- Information We Collect -->
    <div class="mt-6" x-data="{ open: false }">
        <!-- Section Header -->
        <h2 class="text-lg font-bold text-gray-800 cursor-pointer flex items-center" @click="open = !open">
            1. Information We Collect 
            <span class="ml-2" x-text="open ? '▼' : '▶'"></span>
        </h2>

        <!-- Collapsible Content -->
        <div x-show="open" x-transition class="mt-2 text-gray-700">
            <p class="mt-2"><strong>Personal Information:</strong> When you make a purchase, sign up for our newsletter, or register on our site, 
                we may collect personal details such as your name, email address, phone number, shipping and billing address, 
                and payment information.
            </p>
            <p class="mt-2"><strong>Non-Personal Information:</strong> This includes data automatically collected through website cookies, 
                such as your IP address, browser type, pages visited, and time spent on the site.
            </p>
        </div>
    </div>

    <!-- How We Use Your Information -->
    <div class="mt-6" x-data="{ open: false }">
        <!-- Section Header -->
        <h2 class="text-lg font-bold text-gray-800 cursor-pointer flex items-center" @click="open = !open">
            2. How We Use Your Information
            <span class="ml-2" x-text="open ? '▼' : '▶'"></span>
        </h2>

        <!-- Collapsible Content -->
        <div x-show="open" x-transition class="mt-2 text-gray-700">
            <ul class="list-disc ml-6 space-y-2">
                <li>Process and fulfill your orders.</li>
                <li>Improve your experience on our website and enhance customer service.</li>
                <li>Communicate with you regarding updates, offers, and promotions, if you have subscribed to our newsletter.</li>
                <li>Analyze website performance and usage for internal business purposes.</li>
            </ul>
        </div>
    </div>

    <!-- Information Sharing -->
    <div class="mt-6" x-data="{ open: false }">
        <h2 class="text-lg font-bold text-gray-800 cursor-pointer flex items-center" @click="open = !open">
            3. Information Sharing
            <span class="ml-2" x-text="open ? '▼' : '▶'"></span>
        </h2>
        <div x-show="open" x-transition class="mt-2 text-gray-700">
            <p class="mt-2">We do not sell, trade, or rent your personal information to third parties. However, we may share data with trusted partners who assist us in:</p>
            <ul class="list-disc ml-6 mt-2 space-y-2">
                <li>Payment processing.</li>
                <li>Shipping and delivery services.</li>
                <li>Marketing and customer service communications.</li>
                <li>Analyzing data for business insights.</li>
            </ul>
            <p class="mt-2">These partners are required to maintain the confidentiality of your information.</p>
        </div>
    </div>

    <!-- Cookies -->
    <div class="mt-6" x-data="{ open: false }">
        <h2 class="text-lg font-bold text-gray-800 cursor-pointer flex items-center" @click="open = !open">
            4. Cookies
            <span class="ml-2" x-text="open ? '▼' : '▶'"></span>
        </h2>
        <div x-show="open" x-transition class="mt-2 text-gray-700">
            <p class="mt-2">We use cookies and similar technologies to enhance your browsing experience on our website. Cookies help us remember your preferences and provide you with a seamless experience.</p>
            <p class="mt-2">You can manage your cookie preferences through your browser settings.</p>
        </div>
    </div>

    <!-- Data Security -->
    <div class="mt-6" x-data="{ open: false }">
        <h2 class="text-lg font-bold text-gray-800 cursor-pointer flex items-center" @click="open = !open">
            5. Data Security
            <span class="ml-2" x-text="open ? '▼' : '▶'"></span>
        </h2>
        <div x-show="open" x-transition class="mt-2 text-gray-700">
            <p class="mt-2">We implement various security measures to protect your personal information. These include secure servers, encrypted payment gateways, and access controls.</p>
            <p class="mt-2">However, please be aware that no online transmission of data is entirely secure, and we cannot guarantee the absolute security of your information.</p>
        </div>
    </div>


    

    <!-- Rights Section -->
    <div class="mt-6" x-data="{ open: false }">
        <h2 class="text-lg font-bold text-gray-800 cursor-pointer flex items-center" @click="open = !open">
            6. Your Rights
            <span class="ml-2" x-text="open ? '▼' : '▶'"></span>
        </h2>
        <div x-show="open" class="mt-2 text-gray-700" x-transition>
            <p>You may have rights under data protection laws, including:</p>
            <ul class="list-disc ml-5 mt-2">
                <li>Accessing and correcting your personal information.</li>
                <li>Requesting deletion or restriction of your data.</li>
                <li>Opting out of marketing communications by following the unsubscribe link in our emails.</li>
            </ul>
            <p class="mt-2">To exercise these rights, please contact us at <span class="font-medium">[contact email]</span>.</p>
        </div>
    </div>

    <!-- Links to Other Sites -->
    <div class="mt-6" x-data="{ open: false }">
        <h2 class="text-lg font-bold text-gray-800 cursor-pointer flex items-center" @click="open = !open">
            7. Links to Other Sites
            <span class="ml-2" x-text="open ? '▼' : '▶'"></span>
        </h2>
    
        <div x-show="open" class="mt-2 text-gray-700" x-transition>
            <p>Our website may contain links to external sites that are not operated by us. We are not responsible for the privacy practices of these third-party sites and encourage you to review their privacy policies.</p>
        </div>
    </div>

    <!-- Changes to Policy -->
    <div class="mt-6" x-data="{ open: false }">
        <h2 class="text-lg font-bold text-gray-800 cursor-pointer flex items-center" @click="open = !open">
            8. Changes to This Policy
            <span class="ml-2" x-text="open ? '▼' : '▶'"></span>
        </h2>
        
        <div x-show="open" class="mt-2 text-gray-700" x-transition>
            <p>We reserve the right to update this Privacy Policy at any time. Any changes will be posted on this page, and we will notify you of significant changes via email or a prominent notice on our website.</p>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="mt-6">
        <h2 class="text-lg font-bold text-gray-800 cursor-pointer flex items-center" @click="open = !open">9. Contact Us</h2>
        <p>If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
        <div class="mt-2 bg-white p-4 rounded-md shadow-md">
            <p class="font-semibold">Liaisonec Foods Pvt Ltd</p>
            <p>Email: <a href="mailto:maspifoods@gmail.com" class="text-blue-500 hover:underline">maspifoods@gmail.com</a></p>
            <p>Phone: <a href="tel:+918214266777" class="text-blue-500 hover:underline">+91-8214266777</a></p>
        </div>
    </div>
    
</div>
@endsection
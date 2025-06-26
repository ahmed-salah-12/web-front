<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Add a hover effect for buttons */
        .hover-animate:hover {
            transform: scale(1.1);
            transition: all 0.3s ease;
        }

        /* Chatbot animation */
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .chatbot-bounce {
            animation: bounce 1s infinite;
        }
    </style>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="grid grid-cols-3 gap-6 w-full max-w-4xl">

        <!-- Appointment Button -->
        <div class="flex justify-center">
            <button class="w-64 h-64 bg-blue-500 text-white text-3xl font-semibold rounded-lg shadow-lg hover-animate transition-all">
                <span class="block">Appointments</span>
            </button>
        </div>

        <!-- Appointment History Button -->
        <div class="flex justify-center">
            <button class="w-64 h-64 bg-green-500 text-white text-3xl font-semibold rounded-lg shadow-lg hover-animate transition-all">
                <span class="block">Appointment History</span>
            </button>
        </div>

        <!-- Chatbot Button -->
        <div class="flex justify-center items-center">
            <button class="w-64 h-64 bg-purple-500 text-white text-3xl font-semibold rounded-lg shadow-lg hover-animate transition-all relative">
                <span class="block">Chat with Us</span>
                <!-- Animated Bot Icon -->
                <div class="absolute right-4 top-4 bg-white p-2 rounded-full chat-bot-icon text-purple-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4m0 0l-2 2m2-2l2 2"></path>
                    </svg>
                </div>
                <div class="chatbot-bounce absolute right-8 bottom-8">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4m0 0l-2 2m2-2l2 2"></path>
                    </svg>
                </div>
            </button>
        </div>

    </div>

    <!-- Chatbot Popup (Example) -->
    <div x-data="{ open: false }" x-show="open" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h3 class="text-xl font-semibold mb-4">Chat with Our Support Team</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium">Type your message</label>
                    <textarea class="w-full p-2 border border-gray-300 rounded-md" rows="4" placeholder="Write your message here..."></textarea>
                </div>
                <div class="flex justify-end">
                    <button class="bg-purple-500 text-white px-6 py-2 rounded-lg hover:bg-purple-600">Send</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

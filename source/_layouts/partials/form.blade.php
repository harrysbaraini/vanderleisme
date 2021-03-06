<form class="bg-brand p-2 mt-6 mb-6 text-center md:p-6" name="contact" netlify>
    <h1 class="text-4xl text-white font-light mt-2">Get in touch!</h1>
    <div class="mt-6 mb-6 md:flex">
        <div class="p-4 w-full md:w-1/2">
            <input type="text" name="name" required class="no-outline w-full p-4 bg-transparent text-grey-lightest border-b-2 border-white shadow hover:shadow-lg focus:shadow-lg" placeholder="Your name">
        </div>
        <div class="p-4 w-full md:w-1/2">
            <input type="email" name="email" required class="no-outline w-full p-4 bg-transparent text-grey-lightest border-b-2 border-white shadow hover:shadow-lg focus:shadow-lg" placeholder="Your email">
        </div>
    </div>
    <div class="w-full p-4">
        <textarea name="message" required rows="6" class="no-outline w-full p-4 bg-transparent text-grey-lightest border-b-2 border-white shadow hover:shadow-lg focus:shadow-lg" placeholder="Your message"></textarea>
    </div>
    <div class="w-full text-center p-6">
        <button class="bg-brand border-2 border-white rounded-lg text-white p-4 text-xl shadow hover:shadow-lg hover:bg-brand-lighest">
            Send message
        </button>
    </div>
</form>
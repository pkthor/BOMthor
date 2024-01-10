<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
  <Head title="Thorderson family" />

  <BreezeAuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-3xl lg:text-xl text-gray-800 leading-tight">
        FAQ
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm lg:rounded-lg">
          <div class="p-6 bg-blue-300 border-b border-gray-200">
            <h1
              class="
                font-semibold
                text-6xl
                lg:text-2xl
                text-black
                leading-tight
                mb-4
              "
            >
              FAQ
            </h1>

            <h1
              class="
                font-semibold
                text-5xl
                lg:text-xl
                text-black
                leading-tight
                m-auto
              "
            >
              Why do I have to “sign in”?
            </h1>

            <p class="px-4 mb-2 text-4xl lg:text-base">
              Sign in allows the program to remember your last reading location.
            </p>

            <h1
              class="
                font-semibold
                text-5xl
                lg:text-xl
                text-black
                leading-tight
                m-auto
              "
            >
            Forgot your password?
            </h1>

            <p class="px-4 mb-2 text-4xl lg:text-base">
              Click on "forgot your password". You will receive an email with a link to click to restore it. Once the website opens, enter your new password.
            </p>
            <p class="px-4 mb-2 text-4xl lg:text-base">
              The password must contain a minimum of 8 characters.
            </p>

            <h1
              class="
                font-semibold
                text-5xl
                lg:text-xl
                text-black
                leading-tight
                m-auto
              "
            >
              How was this site born?
            </h1>

            <p class="px-4 text-4xl lg:text-base">
              In the October 2011 general conference, Elder Richard G. Scott,
              a member of the Quorum of the Twelve Apostles said: In 1991 I wanted
              give my family a special Christmas gift. I wrote in
              my diary how I was making this wish come true: “Wednesday, 18
              December 1991, 12.38 pm. I just finished the audio recording
              of the Book of Mormon for my family. It was an experience that
              has increased my testimony of this divine work and has
              strengthened in me the desire to know its pages better, however
              draw from the Scriptures the truths useful for the service I render to
              Gentleman. I love this book. I testify with all my soul that it
              is true and that it has been prepared to bless the house of Israel and
              all those who are part of it all over the world. All those
              who will study its message with humility and faith, believing in
              Jesus Christ, they will know its truthfulness and will find a treasure
              which will lead them, in this life, to greater happiness, peace and
              success. I testify, upon all that is sacred, that this book is
              True".
            </p>

            <h1
              class="
                font-semibold
                text-5xl
                lg:text-xl
                text-black
                leading-tight
                m-auto
              "
            >
              How were these conversion stories collected?
            </h1>

            <p class="px-4 mb-4 text-4xl lg:text-base">
              During our service as full temple missionaries in
              Rome Temple, we met some members of the church
              wonderful. As these friendships developed, they have
              started sharing stories of how they discovered the
              gospel. Their stories were so fascinating and inspiring
              faith that we asked him to write for us This is one
              collection of these stories. We translated them into English. There
              We apologize for any translation errors.
            </p>

            <img
              class="h-40 bg-blue-400 mx-auto"
              src="/assets/photos/ericloree.jpg"
              alt="Eric & Loree Thorderson"
            />
            <p class="mx-auto text-center text-2xl lg:text-base">
              Eric & Loree Thorderson
            </p>
          </div>
        </div>
      </div>
    </div>
  </BreezeAuthenticatedLayout>
</template>

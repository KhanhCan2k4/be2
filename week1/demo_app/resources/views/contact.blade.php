<x-layout>
  <x-slot:title>Contact Page</x-slot:title>
  <x-slot:style>
    <style>
      .circle {
            position: fixed;
            top: 20%;
            left: 20%;
            background: #000;
            width: 50px;
            height: 50px;
            border-radius: 50%; 
            animation: fall 3s infinite linear alternate;
        }

        @keyframes fall {
            0% { top: 20%; left: 20%;}
            100% { top: 80%; left: 80%;}
        }
    </style>
  </x-slot:style>

  <h1>Contact Page</h1>
  <div class="circle"></div>

</x-layout>
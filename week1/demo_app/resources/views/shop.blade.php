<x-layout>
  <x-slot:title>Home Page</x-slot:title>
  <x-slot:style>
    <style>
      .circle {
            position: fixed;
            top: 30%;
            left: 30%;
            background: #000;
            width: 50px;
            height: 50px;
            border-radius: 50%; 
            animation: fall 3s infinite linear alternate;
        }

        @keyframes fall {
            0% { left: 30%;}
            100% { left: 70%;}
        }
    </style>
  </x-slot:style>

  <h1>Shop Page</h1>
  <div class="circle"></div>

</x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Settins</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#ECF0F1]"> 
    <div class="max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold tracking-tight text-[#E95F4A] flex items-center justify-center">
            Configuración del Perfil</h2>
    </div>

<div class="relative overflow-hidden   place-items-center flex justify-center ">
<form action="" class="mt-[150px] w-96 p-6 shadow-lg rounded-md ">
    <div class="">

        <!-- Username -->
        <div class="relative w-[320px] bg-slate-500  rounded-md m-[15px]">

            <input type="checkbox" id="input1" class="absolute peer opacity-0">

            <label for="input1" class=" text-white   font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center ">Username</label>
                <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                    <input type="text" name="username" placeholder="Username" class="p-[15px] text-sm">
                </div>
        </div>

        <!-- Nombre -->
        <div class="relative w-[320px] bg-slate-500  rounded-md m-[15px]">

            <input type="checkbox" id="input2" class="absolute peer opacity-0">

            <label for="input2" class=" text-white   font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center ">Nombre</label>
                <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                    <input type="text" name="nombre" placeholder="Nombre" class="p-[15px] text-sm">
                </div>
        </div>

        <!-- Apellido -->
        <div class="relative w-[320px] bg-slate-500  rounded-md m-[15px]">

            <input type="checkbox" id="input3" class="absolute peer opacity-0">

            <label for="input3" class=" text-white   font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center ">Apellido</label>
                <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                    <input type="text" name="apellido" placeholder="Apellido" class="p-[15px] text-sm">
                </div>
        </div>

        <!-- Contraseña -->       
        <div class="relative w-[320px] bg-slate-500  rounded-md m-[15px]">

            <input type="checkbox" id="input4" class="absolute peer opacity-0">

            <label for="input4" class=" text-white   font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center ">Contraseña</label>
                <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                    <input type="password" name="contraseña" placeholder="Contraseña" class="p-[20px] text-sm">
                </div>
        </div>     
    </div>
</form>
</div>



</body>
</html>
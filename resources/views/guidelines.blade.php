@php
    $Sponsor1 = 'assets/img/sponsor1.svg';
    $Speaker1 = 'assets/img/speaker1.svg';
    $Speaker2 = 'assets/img/speaker2.svg';
    $Speaker3 = 'assets/img/speaker3.svg';
    $Speaker4 = 'assets/img/speaker4.svg';
    $Speaker5 = 'assets/img/speaker5.svg';
    $Speaker6 = 'assets/img/speaker6.svg';
    $Speaker7 = 'assets/img/speaker7.svg';
    $Speaker8 = 'assets/img/speaker8.svg';
    $Speaker9 = 'assets/img/speaker9.svg';
    $Agenda = 'assets/img/agenda.svg';
    $NavbarIcon = 'assets/img/img_navbar.svg';
    $FooterLogo = 'assets/img/logofooter.svg';
    $Background = 'assets/img/bg.svg';
    $Pin = 'assets/img/pin.svg';
    $Hero = 'assets/img/hero.svg';
@endphp

<!DOCTYPE html>
<html>
<head>
  <title>CyberDas 2023</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
        theme: {
            extend: {
                backgroundImage: {
                    gradientradial: 'radial-gradient(var(--tw-gradient-stops))',
                },
                colors: {
                    primary: '#3D2874',
                    secondary: '#E2FF56',
                    cyanest : '#4EF1E0',
                    darkest : '#090116'
                }
            },
            fontFamily: {
            sans: ['Poppins'],
            space: ['Space Grotesk']
            }
        },
    }
  </script>
</head>
<body>
    <nav class="bg-primary w-screen rounded-b-xl flex justify-between items-center py-5 px-20 shadow-lg z-10 fixed">
        <div class="flex items-center justify-between">
            <img src="{{ asset($NavbarIcon) }}" alt="Logo"/>
        </div>

        <button class="text-white inline-block md:hidden" id="menu-toggle">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm16 4H4v2h16v-2z"/>
            </svg>
        </button>

        <div class="hidden md:flex items-center ml-auto text-xl space-x-10 mr-10 font-poppins" id="menu-items">
            <a href="#tentang" class="text-white hover:text-gray-300 px-3 py-2 rounded-md font-medium">About</a>
            <a href="#pemateri" class="text-white hover:text-gray-300 px-3 py-2 rounded-md font-medium">Speakers</a>
            <a href="#timeline-venue" class="text-white hover:text-gray-300 px-3 py-2 rounded-md font-medium">Timeline & Venue</a>
        </div>
        <a href="#" class="bg-[#00C0AC] hover rounded-3xl pt-1 px-8 h-8 font-medium text-white text-base md:block font-poppins">Register</a>
    </nav>

    {{-- Hero Section --}}
    <div class="bg-primary z-1 h-screen items-center content-center">
        <div class="justify-center ">
            <img
                class="mt-32 absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/3 mx-auto lg:mt-12"
                src="{{ asset($Background) }}"
                alt="ast1"
            />
        </div>
        <div class="mx-auto absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/3 hover:scale-y-105 transition-all duration-300">
            <div class="items-center content-center flex flex-row space-x-12">
                <div>
                    <div class="flex flex-row space-x-2">
                        <img class="h-6" src="{{ asset($Pin) }}" alt="" />
                        <p class="text-left text-white font-medium text-xl">Coming Soon October 2023!</p>
                    </div>
                    <div>
                        <p class="text-left text-cyanest font-bold text-9xl">2023</p>
                    </div>
                </div>
                <div>
                    <img class="h-60 -mt-24" src="{{ asset($Hero) }}" alt="" />
                </div>
            </div>
            <div>
                <p class="text-left text-white font-bold text-9xl">CyberDas</p>
            </div>
        </div>
    </div>

    {{-- Description Section --}}
    <div id="tentang" class="bg-white z-0 py-16 font-sans px-40">
        <div class="lg:space-x-8 lg:flex lg:flex-row">
            <div>
                <p class="space-y-2 my-2 text-center font-bold text-8xl lg:text-6xl lg:text-right hover:scale-105 transition-all duration-300">
                    <span class="underline decoration-cyanest decoration-8">International Workshop</span> on <span class="text-primary">Cyber Security</span> and <span class="text-primary">Data Science.</span> 
                </p>
            </div>
            <br />
            <div>
                <p class="space-y-2 my-2 font-medium text-4xl pr-10 text-justify lg:flex lg:flex-col lg:text-left lg:text-xl">
                    During the Covid pandemic, there are two things in information technoIogy that have become the spotlight, cybersecurity and data science. There are several cybersecurity incidents that occurred during the pandemic, such as the proliferation of phishing websites that use information about Covid-19 to lure victims into giving up their personal data, malicious software that targets users who work from home online, and malicious domains containing covid or corona keywords. In addition, data processing has become very important in the past pandemic era. We can estimate the spread of the virus by tracking people's movement patterns. These are the two things that motivate us to share knowledge from international experts to the Indonesian and international community by holding an International Workshop on Cyber Security and Data Science.
                </p>
            </div>
        </div>
    </div>

    {{-- Topic Section --}}
    <div class="bg-white z-0 py-2 font-sans pb-24 px-40">
        <p class="space-y-2 my-24 text-center font-bold text-8xl mb-12 lg:text-6xl lg:my-2 hover:scale-105 transition-all duration-300">
            The <span class="text-primary">TOPICS.</span> 
        </p>
        <div class="decoration-4 mx-auto justify-center font-bold text-4xl lg:space-x-24 lg:flex lg:flex-row lg:text-xl lg:mt-12">
            <div class="flex flex-row text-right">
                {{-- <ul class="invisible space-y-6 my-2 flex flex-col text-right lg:visible">
                    <li><span class="text-cyanest">.01 &nbsp; &nbsp; </span></li>
                    <li><span class="text-cyanest">.02 &nbsp; &nbsp;</span></li>
                    <li><span class="text-cyanest">.03 &nbsp; &nbsp;</span></li>
                    <li><span class="text-cyanest">.04 &nbsp; &nbsp;</span></li>
                </ul> --}}
                <ul class="space-y-6 my-2 flex flex-col -ml-4 lg:ml-0">
                    <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Digital Forensic Techniques in Fraud Investigation</span></li>
                    <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Data Science in the Cloud</li>
                    <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Image Recognition with Deep Learning</span></li>
                    <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">DevSecOps Implementation for Containerized Software Delivery on AWS</span></li>
                </ul>
            </div>
            
            <div class="flex flex-row lg:mt-0">
                {{-- <ul class="invisible space-y-6 my-2 flex flex-col text-right lg:visible">
                    <li><span class="text-cyanest">.05 &nbsp; &nbsp; </span></li>
                    <li><span class="text-cyanest">.06 &nbsp; &nbsp;</span></li>
                    <li><span class="text-cyanest">.07 &nbsp; &nbsp;</span></li>
                    <li><span class="text-cyanest">.08 &nbsp; &nbsp;</span></li>
                    <li><span class="text-cyanest">.09 &nbsp; &nbsp;</span></li>
                </ul> --}}
                <ul class="space-y-6 my-2 flex flex-col">
                    <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Securing IoT/OT Devices: An Introduction to Shodan & Text Mining Techniques for Tracking Technology Adoption</span></li>
                    <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Secure Data Management</li>
                    <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Catching the Bad Guy Using Honeypots</span></li>
                    <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Applying ML & Data Science in Cybersecurity</span></li>
                    <li class="hover:scale-105 transition-all duration-300"><span class="hover:underline decoration-cyanest">Reverse Engineering and Malware Analysis</span></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Speaker Section --}}
    <div id="pemateri" class="bg-darkest z-0 pt-32 font-sans pb-36 px-36">
        <div class="flex flex-row justify-between">
            <p class="text-white space-y-2 my-2 text-left font-bold text-8xl lg:text-6xl mb-28 hover:scale-105 transition-all duration-300">
                Meet the <br />SPEAKERS<span class="text-cyanest">.</span> 
            </p>
            <img className="about-img" src="{{ asset($NavbarIcon) }}" class=" invisible h-14 mr-3 lg:h-14 lg:visible hover:scale-105 transition-all duration-300" alt=" " />
        </div>
        
        <div class="justify-center mx-auto items-center lg:flex lg:flex-row lg:space-x-28">
            <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                <img class="w-full" src="{{ asset($Speaker1) }}" alt="" /> 
                <div class="-mt-80 lg:-mt-44 px-8">
                    
                    <p class="text-white font-bold text-7xl lg:text-3xl">Dimas Surya</p>
                    <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Lembaga Penjamin Simpanan, Indonesia</p>
                    <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Digital</span> Forensic Techniques in Fraud Investigation</p>
                </div>
            </div>
            <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9 lg:-mt-32" >
                <img class="w-full" src="{{ asset($Speaker2) }}" alt="" /> 
                <div class="-mt-80 lg:-mt-44 px-8">
                    <p class="text-white font-bold text-7xl lg:text-3xl">Agus Budi Raharjo</p>
                    <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Institut Teknologi Sepuluh Nopember, Indonesia</p>
                    <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Data</span> Science in the Cloud</p>
                </div>
            </div>
            <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                <img class="w-full" src="{{ asset($Speaker3) }}" alt="" /> 
                <div class="-mt-96 lg:-mt-48 px-8">
                    <p class="text-white font-bold text-7xl lg:text-3xl">Ilham Gurat Adillion</p>
                    <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Awl. Inc, Japan</p>
                    <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Image</span> Recognition with Deep Learning</p>
                </div>
            </div>
        </div>

        <div class="justify-center mx-auto items-center mt-28 lg:flex lg:flex-row lg:space-x-28">
            <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                <img class="w-full" src="{{ asset($Speaker4) }}" alt="" /> 
                <div class="-mt-96 lg:-mt-52 px-8">
                    <p class="text-white font-bold text-7xl lg:text-3xl">Rio Indra Maulana</p>
                    <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">US-based Cloud Provider</p>
                    <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">DevSecOps</span> Implementation for Containerized Software Delivery on AWS</p>
                </div>
            </div>
            <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9 lg:-mt-32" >
                <img class="w-full" src="{{ asset($Speaker5) }}" alt="" /> 
                <div class="-mt-96 lg:-mt-56 px-8">
                    <p class="text-white font-bold text-7xl lg:text-3xl">Eirini Anthi & <br/> Lowri Williams</p>
                    <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Cardiff University, UK</p>
                    <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Securing</span> IoT/OT Devices: An Introduction to Shodan & Text Mining Techniques for Tracking Technology Adoption</p>
                </div>
            </div>
            <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                <img class="w-full" src="{{ asset($Speaker6) }}" alt="" /> 
                <div class="-mt-60 lg:-mt-32 px-8">
                    <p class="text-white font-bold text-7xl lg:text-3xl">Bian Yang</p>
                    <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Norwegian University of Science and Technology, Norway</p>
                    <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Secure</span> Data Management</p>
                </div>
            </div>
        </div>

        <div class="justify-center mx-auto items-center mt-28 lg:flex lg:flex-row lg:space-x-28">
            <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                <img class="w-full" src="{{ asset($Speaker7) }}" alt="" /> 
                <div class="-mt-96 lg:-mt-56 px-8">
                    <p class="text-white font-bold text-7xl lg:text-3xl">Ahmad Balya Izzuddin</p>
                    <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Swiss German University & Indonesia Honeynet Project, Indonesia</p>
                    <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Catching</span> the Bad Guy Using Honeypots</p>
                </div>
            </div>
            <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9 lg:-mt-32" >
                <img class="w-full" src="{{ asset($Speaker8) }}" alt="" /> 
                <div class="-mt-96 lg:-mt-56 px-8">
                    <p class="text-white font-bold text-7xl lg:text-3xl">Yevonnael Andrew</p>
                    <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">Swiss German University & Indonesia Honeynet Project, Indonesia</p>
                    <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Applying</span> ML & Data Science in Cybersecurity</p>
                </div>
            </div>
            <div class="w-full hover:scale-105 transition-all duration-300 mb-44 lg:mb-0 lg:w-2/9" >
                <img class="w-full" src="{{ asset($Speaker9) }}" alt="" /> 
                <div class="-mt-80 lg:-mt-44 px-8">
                    <p class="text-white font-bold text-7xl lg:text-3xl">Saed Alrabaee</p>
                    <p class="text-white font-normal text-4xl mb-8 lg:text-base lg:mb-2">United Arab Emirates University, UAE</p>
                    <p class="text-white font-bold text-4xl lg:text-base"><span class="overline decoration-cyanest decoration-8 lg:decoration-4">Reverse</span> Engineering and Malware Analysis</p>
                </div>
            </div>
        </div>
        
    </div>

    {{-- Agenda Section --}}
    <div id="timeline-venue" class="bg-white z-0 pt-32 font-sans pb-36 px-40 lg:px-64">
        <p class="space-y-2 my-2 text-center font-bold text-8xl mb-12 lg:text-6xl hover:scale-105 transition-all duration-300">
            The <span class="text-primary">AGENDAS.</span> 
        </p>
        <div class="lg:space-x-8 lg:flex lg:flex-row">
            <div>
                <p class="space-y-2 my-2 text-justify font-medium text-4xl lg:text-xl lg:text-right hover:scale-105 transition-all duration-300">
                    The workshop will be held on <span class="underline decoration-cyanest decoration-4 font-bold">October 2-5, 2023</span> at the <span class="underline decoration-cyanest decoration-4 font-bold">Informatics Engineering Building, ITS Sukolilo Campus</span>. Part of the training will be conducted <span class="underline decoration-cyanest decoration-4 font-bold">online</span>. Each training session is either <span class="underline decoration-cyanest decoration-4 font-bold">half-day (3 hours) or full-day (6 hours)</span> and some can be done in parallel.
                </p>
            </div>
            <div class="justify-center items-center mx-auto text-center content-center">
                <iframe class="rounded-xl w-full h-96 lg:w-[435px] lg:h-[269px] hover:scale-105 transition-all duration-300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.636239766225!2d112.79405626456118!3d-7.282164444743877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf7e10deaff%3A0x2b2bcdafc68c9a28!2sDepartemen%20Teknik%20Informatika!5e0!3m2!1sid!2sid!4v1677625942618!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="justify-center mx-auto items-center mt-12">
            <img class="hover:scale-105 transition-all duration-300" src="{{ asset($Agenda) }}" alt="" />
        </div>
    </div>

    {{-- Footer Section --}}
    <footer class="bg-darkest py-4 px-8 pt-24 pb-24 lg:pb-2 lg:pt-9 lg:px-28 mx-auto items-center drop-shadow-2xl shadow-2xl z-50">
        <div class="lg:flex lg:flex-row font-space text-4xl lg:text-base font-normal text-white space-x-1.5 lg:visible justify-between">
            <div>
                <p class="visible font-bold lg:visible lg:text-left text-center">
                    14th International Conference
                </p>
                <p class="visible font-bold lg:visible lg:text-left text-center">
                    on Information, Communication  
                </p>
                <p class="visible font-bold lg:visible lg:text-left text-center">
                    Technology and System (ICTS)
                </p>
                <p class="visible font-bold lg:visible lg:text-left text-center">
                    2023
                </p>
                    
            </div>
            <br></br>
            <div>
                <p class="visible item-center lg:visible lg:text-left text-center">
                    <span class="font-bold">Dr. Baskoro Adi Pratomo (General Chair) </span>
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Department of Informatics, Faculty of  
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Information Technology, 
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Institut Teknologi Sepuluh Nopember (ITS) 
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Jl. Teknik Kimia, Kampus ITS, 
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Sukolilo, Surabaya, Indonesia 60111 
                </p>
                <p class="visible lg:visible lg:text-left text-center">
                    Email: icts.if[@t]its.ac.id
                </p>
            </div>
            <br></br>
            <div class="item-center text-center">
                <p class="font-bold mb-8">
                    “Securing the future, one byte at a time”
                </p>
                <img class="h-24 lg:h-14 mx-auto" src="{{ asset($FooterLogo) }}" alt="" />
            </div>
        </div>

        <div class="flex items-center sm:justify-between my-4 mt-8">
        </div>
    </footer>
</body>
</html>
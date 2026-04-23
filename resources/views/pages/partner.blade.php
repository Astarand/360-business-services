@extends('layouts.app')

@section('title', 'Partner With Us - Business Partnership Program | 360 Business and Services | Affiliate Opportunities Kolkata')

@section('meta_description', 'Join the 360 Business and Services partner program and grow your business with us. Excellent partnership opportunities for CAs, business consultants, financial advisors, and service providers in Kolkata. Attractive commission structure, marketing support, and business development opportunities available.')

@section('keywords', 'business partnership program, affiliate opportunities Kolkata, CA partnership, business consultant collaboration, financial advisor partnership, referral program, business collaboration, partnership opportunities, franchise opportunities, business network Kolkata, professional partnership, service provider network')

@section('canonical_url', url('/partner'))

@section('og_title', 'Partner With 360 Business and Services | Business Partnership Opportunities in Kolkata')
@section('og_description', 'Join our growing network of partners. Excellent partnership opportunities for CAs, consultants, and service providers with attractive commission structure and business support.')
@section('og_type', 'website')
@section('og_image', 'https://360bizservice.com/assets/img/partnership/360-business-services-partnership-og.jpg')
@section('og_image_alt', '360 Business and Services Partnership Program - Join Our Network in Kolkata')

@section('twitter_title', 'Partner With 360 Business and Services | Business Partnership Program')
@section('twitter_description', 'Join our partner network! Excellent opportunities for CAs, consultants & service providers. Attractive commissions & business support available.')

@section('breadcrumb_schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Partner With Us",
            "item": "{{ url('/partner') }}"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "360 Business and Services Partnership Program",
    "description": "Business partnership and affiliate program offering opportunities for CAs, consultants, and service providers to collaborate and grow together.",
    "url": "{{ url('/partner') }}",
    "parentOrganization": {
        "@type": "Organization",
        "name": "360 Business and Services",
        "url": "https://360bizservice.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "11th Floor,TowerNo-1, PS Srijan Corporate Park, GP Block, Sector-V",
            "addressLocality": "Kolkata",
            "addressRegion": "West Bengal",
            "postalCode": "700091",
            "addressCountry": "IN"
        },
        "telephone": "+91-9830747981",
        "email": "contact@360bizservice.com"
    },
    "areaServed": {
        "@type": "Country",
        "name": "India"
    },
    "serviceType": [
        "Business Partnership",
        "Affiliate Program",
        "Referral Network",
        "Professional Collaboration"
    ]
}
</script>
@endsection

@section('main')

<!-- main-area -->
<main class="fix">

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Partner With us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Partner With us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{ asset('assets/img/images/breadcrumb_shape01.png') }}" alt="">
            <img src="{{ asset('assets/img/images/breadcrumb_shape02.png') }}" alt="">

        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="inner-contact-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="inner-contact-info">
                        <h2 class="title">Why Affiliate With 360 Business and Services</h2>
                        <div class="contact-info-item">
                            <ul class="list-wrap1">
                                <li>Low Invesment to Start With</li>
                                <li>Offer Entire Range of Service to your Network</li>
                                <li>Over 30+ Successful Franchise Owners across India</li>
                                <li>Extensive Marketing Support</li>
                                <li>Training & Education of all service</li>
                                <li>Dedicated Support & Guidance</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="flash-message">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if(Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                    </div>

                    <script>
                        // Hide flash message after 5 seconds
                        setTimeout(function() {
                            document.getElementById('flash-message').style.display = 'none';
                        }, 5000);
                    </script>
                    <div class="contact-form">
                        <form action="{{ route('submit.form') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input type="text" name="name" placeholder="Name *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" name="email" placeholder="E-mail *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="number" name="phone" placeholder="Phone *">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <select class="form-select" aria-label="Default select example" name="state" id="state">
                                            <option value="" selected disabled>State</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Ladakh">Ladakh</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <select class="form-select" aria-label="Default select example" name="city" id="city">
                                            <option value="" selected disabled>City</option>
                                            <!-- Cities will be populated dynamically here -->
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input class="form-control" type="file" name="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="form_submit">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->



</main>
<!-- main-area-end -->

<script>

    var citiesByState = {
        "Andaman and Nicobar Islands": ["Port Blair"],
        "Andhra Pradesh": ["Amaravati", "Visakhapatnam", "Vijayawada", "Guntur", "Nellore", "Kurnool", "Rajahmundry", "Tirupati", "Kadapa", "Kakinada", "Anantapur", "Chittoor"],
        "Arunachal Pradesh": ["Itanagar", "Naharlagun", "Tawang", "Bomdila", "Pasighat", "Along"],
        "Assam": ["Guwahati", "Silchar", "Dibrugarh", "Jorhat", "Nagaon", "Tinsukia", "Tezpur", "Bongaigaon", "Karimganj", "Dhubri"],
        "Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Purnia", "Darbhanga", "Arrah", "Begusarai", "Katihar", "Munger", "Chhapra"],
        "Chandigarh": ["Chandigarh"],
        "Chhattisgarh": ["Raipur", "Bhilai", "Bilaspur", "Korba", "Durg", "Rajnandgaon", "Raigarh", "Jagdalpur", "Ambikapur"],
        "Dadra and Nagar Haveli and Daman and Diu": ["Daman", "Silvassa"],
        "Delhi": ["New Delhi", "Delhi"],
        "Goa": ["Panaji", "Margao", "Vasco da Gama"],
        "Gujarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar", "Jamnagar", "Junagadh", "Gandhinagar", "Gandhidham", "Nadiad", "Morbi", "Surendranagar"],
        "Haryana": ["Chandigarh", "Faridabad", "Gurgaon", "Panipat", "Ambala", "Rohtak", "Hisar", "Karnal", "Sonipat", "Yamunanagar", "Panchkula"],
        "Himachal Pradesh": ["Shimla", "Mandi", "Solan", "Dharamshala", "Palampur", "Kangra", "Una", "Hamirpur", "Bilaspur", "Kullu", "Chamba"],
        "Jammu and Kashmir": ["Srinagar", "Jammu", "Anantnag", "Baramulla", "Kathua", "Udhampur", "Sopore", "Rajouri", "Pulwama", "Kupwara"],
        "Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad", "Bokaro", "Deoghar", "Phusro", "Hazaribagh", "Giridih", "Ramgarh", "Medininagar"],
        "Karnataka": ["Bangalore", "Mysore", "Hubli", "Mangalore", "Belgaum", "Gulbarga", "Davanagere", "Bellary", "Vijayapura", "Shimoga", "Tumkur", "Hospet", "Bidar", "Haveri", "Raichur", "Dharwad", "Koppal", "Gadag", "Chitradurga", "Udupi", "Chikmagalur", "Kolar", "Bangarapet", "Ramanagara", "Bagalkot", "Hassan", "Sirsi", "Karwar", "Chamarajanagar", "Gangavati", "Mandya", "Chikkaballapur", "Channarayapatna", "Shrirangapattana", "Sagara", "Sindhnur", "Jamkhandi", "Robertson Pet"],
        "Kerala": ["Thiruvananthapuram", "Kochi", "Kozhikode", "Kollam", "Thrissur", "Kannur", "Alappuzha", "Kottayam", "Palakkad", "Manjeri", "Kottakkal", "Mananthavady", "Thalassery", "Kasaragod", "Punalur", "Neyyattinkara", "Kanhangad", "Taliparamba"],
        "Ladakh": ["Leh", "Kargil"],
        "Lakshadweep": ["Kavaratti"],
        "Madhya Pradesh": ["Bhopal", "Indore", "Jabalpur", "Gwalior", "Ujjain", "Sagar", "Dewas", "Satna", "Ratlam", "Rewa", "Katni", "Singrauli", "Burhanpur", "Khandwa", "Bhind", "Chhindwara", "Guna", "Shivpuri", "Vidisha", "Damoh"],
        "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Thane", "Nashik", "Kalyan-Dombivli", "Vasai-Virar", "Aurangabad", "Solapur", "Bhiwandi", "Amravati", "Navi Mumbai", "Malegaon", "Kolhapur", "Sangli", "Jalgaon", "Akola", "Latur", "Dhule", "Ahmednagar", "Chandrapur", "Parbhani", "Ichalkaranji", "Jalna", "Bhusawal", "Nanded", "Beed", "Satara", "Wardha", "Yavatmal", "Karad", "Achalpur"],
        "Manipur": ["Imphal", "Thoubal", "Lilong", "Mayang Imphal", "Kakching", "Nambol", "Lamai", "Jiribam", "Lamshang"],
        "Meghalaya": ["Shillong", "Tura", "Jowai", "Baghmara", "Nongstoin", "Williamnagar", "Resubelpara", "Mairang", "Nongpoh", "Amlarem"],
        "Mizoram": ["Aizawl", "Lunglei", "Saiha", "Champhai", "Kolasib", "Serchhip", "Lawngtlai", "Saitual"],
        "Nagaland": ["Kohima", "Dimapur", "Mokokchung", "Tuensang", "Wokha", "Zunheboto", "Phek", "Kiphire", "Mon", "Longleng"],
        "Odisha": ["Bhubaneswar", "Cuttack", "Rourkela", "Berhampur", "Sambalpur", "Puri", "Brahmapur", "Balasore", "Baripada", "Bhadrak", "Bargarh", "Angul", "Jharsuguda", "Jeypore", "Bargarh", "Bhawanipatna", "Koraput"],
        "Puducherry": ["Pondicherry", "Karaikal", "Yanam", "Mahe"],
        "Punjab": ["Ludhiana", "Amritsar", "Jalandhar", "Patiala", "Bathinda", "Hoshiarpur", "Mohali", "Batala", "Pathankot", "Moga", "Abohar", "Malout", "Khanna", "Phagwara", "Muktasar", "Barnala"],
        "Rajasthan": ["Jaipur", "Jodhpur", "Kota", "Bikaner", "Ajmer", "Udaipur", "Bhilwara", "Alwar", "Bharatpur", "Sri Ganganagar", "Pali", "Barmer", "Sikar", "Tonk", "Chittorgarh", "Nagaur", "Sawai Madhopur", "Hanumangarh", "Dausa", "Churu"],
        "Sikkim": ["Gangtok", "Namchi", "Mangan", "Gyalshing", "Singtam"],
        "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Tiruppur", "Salem", "Erode", "Tirunelveli", "Vellore", "Thoothukudi", "Dindigul", "Thanjavur", "Ranipet", "Nagercoil", "Karur", "Ambattur", "Ooty", "Pollachi", "Rajapalayam", "Tenkasi", "Hosur", "Avadi", "Kancheepuram"],
        "Telangana": ["Hyderabad", "Warangal", "Nizamabad", "Khammam", "Karimnagar", "Ramagundam", "Mahbubnagar", "Nalgonda", "Adilabad", "Suryapet", "Miryalaguda"],
        "Tripura": ["Agartala", "Dharmanagar", "Kailasahar", "Udaipur", "Belonia", "Ambassa"],
        "Uttar Pradesh": ["Lucknow", "Kanpur", "Ghaziabad", "Agra", "Varanasi", "Meerut", "Prayagraj", "Bareilly", "Aligarh", "Moradabad", "Saharanpur", "Gorakhpur", "Noida", "Jhansi", "Muzaffarnagar", "Mathura", "Budaun", "Rampur", "Shahjahanpur", "Farrukhabad", "Hapur", "Etawah", "Mirzapur", "Bulandshahr"],
        "Uttarakhand": ["Dehradun", "Haridwar", "Roorkee", "Haldwani", "Rudrapur", "Kashipur", "Rishikesh", "Pithoragarh", "Ramnagar", "Ranikhet", "Kotdwar", "Srinagar"],
        "West Bengal": ["Kolkata", "Asansol", "Siliguri", "Durgapur", "Bardhaman", "Malda", "Baharampur", "Habra", "Jalpaiguri", "Kharagpur", "Shantipur", "Dankuni", "Dhulian", "Ranaghat", "Haldia", "Raiganj", "Krishnanagar", "Nabadwip", "Midnapore", "Balurghat", "Basirhat", "Bankura", "Chakdaha", "Darjeeling", "Alipurduar", "Purulia", "Jangipur", "Bangaon", "Cooch Behar", "Bolpur", "Rampurhat", "Gangarampur", "Barrackpore", "Diamond Harbour", "Islampur", "Contai", "Jhargram", "Kalimpong", "Tamluk", "Arambagh", "Barasat", "Barddhaman", "Kalyani", "Bidhannagar", "Naihati", "Bankura", "Chinsurah", "Ashoknagar Kalyangarh", "English Bazar", "Arambagh"]
    };



    function populateCities() {
        var stateSelect = document.getElementById("state");
        var citySelect = document.getElementById("city");
        var state = stateSelect.value;
        citySelect.innerHTML = "";
        if (state && citiesByState[state]) {
            var cities = citiesByState[state];
            cities.forEach(function(city) {
                var option = document.createElement("option");
                option.text = city;
                option.value = city.toLowerCase();
                citySelect.add(option);
            });
        }
    }


    document.getElementById("state").addEventListener("change", populateCities);
</script>

@endsection

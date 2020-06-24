    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="javascript:;" id="dashboard" data-active="true" data-toggle="collapse" aria-expanded="false" class="menus dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 254.182 254.182" fill="none" 254.182 254.182;" xml:space="preserve" width="512px" height="512px">
                                    <g>
                                        <g>
                                            <path d="M211.655,137.102c-4.143,0-7.5,3.358-7.5,7.5v77.064h-41.373v-77.064c0-4.142-3.357-7.5-7.5-7.5H98.903   c-4.143,0-7.5,3.358-7.5,7.5v77.064H50.026v-77.064c0-4.142-3.357-7.5-7.5-7.5c-4.143,0-7.5,3.358-7.5,7.5v84.564   c0,4.142,3.357,7.5,7.5,7.5h56.377h56.379h56.373c4.143,0,7.5-3.358,7.5-7.5v-84.564   C219.155,140.46,215.797,137.102,211.655,137.102z M106.403,221.666v-69.564h41.379v69.564H106.403z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                            <path d="M251.985,139.298L132.389,19.712c-2.928-2.929-7.677-2.928-10.607,0L2.197,139.298c-2.929,2.929-2.929,7.678,0,10.606   c2.93,2.929,7.678,2.929,10.607,0L127.086,35.622l114.293,114.283c1.464,1.464,3.384,2.196,5.303,2.196   c1.919,0,3.839-0.732,5.304-2.197C254.914,146.976,254.914,142.227,251.985,139.298z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        </g>
                                    </g>
                                </svg>

                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <?php
                    $session = \Config\Services::session();
                    if ($session->get('role') == "admin") {
                    ?>

                        <li class="menu">
                            <a href="javascript:;" id="detaildesa" aria-expanded="false" class="menus dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="24px" viewBox="0 0 512 512" width="24px">
                                        <g>
                                            <g>
                                                <path d="m361 166c0-58.049-47.116-106-105-106-57.809 0-105 47.884-105 106 0 57.897 47.103 105 105 105s105-47.103 105-105zm-180 0c0-41.907 33.645-76 75-76s75 34.093 75 76c0 41.355-33.645 75-75 75s-75-33.645-75-75z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                                <path d="m421 166c0-91.012-73.881-166-165-166-86.015 0-165 68.718-165 166 0 60.654 59.386 152.311 94.646 202.675-39.197 7.878-94.646 28.221-94.646 68.325 0 57.35 106.821 75 165 75 58.184 0 165-17.651 165-75 0-40.106-55.454-60.448-94.646-68.325 35.079-50.105 94.646-141.951 94.646-202.675zm-300 0c0-84.003 70.075-136 135-136 74.439 0 135 61.009 135 136 0 63.524-88.762 188.742-135.001 247.145-46.243-58.391-134.999-183.582-134.999-247.145zm270 271c0 25.061-73.461 45-135 45-61.457 0-135-19.955-135-45 0-11.939 26.796-32.636 84.08-41.282 21.878 29.688 38.345 49.615 39.371 50.853 2.849 3.439 7.083 5.429 11.549 5.429s8.7-1.99 11.549-5.429c1.026-1.238 17.493-21.165 39.371-50.853 57.284 8.646 84.08 29.343 84.08 41.282z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Detail Desa</span>
                                </div>
                            </a>
                        </li>

                        <li class="menu">
                            <a href="javascript:;" id="penduduk" aria-expanded="false" class="menus dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve" width="24px" height="24px" class="hovered-paths">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M344.214,276.755l-43.582-19.37c-3.079-1.368-5.067-4.429-5.067-7.797V237.62c14.64-11.665,24.05-29.628,24.05-49.758    v-16.847c4.823-2.665,8.016-7.815,8.016-13.583v-1.635c0-35.076-28.537-63.613-63.613-63.613h-16.032    c-35.076,0-63.613,28.537-63.613,63.613v14.835c0,5.07,2.182,9.663,5.985,12.602c0.645,0.498,1.324,0.936,2.031,1.315v3.312    c0,20.13,9.409,38.093,24.048,49.757v11.969c0,3.368-1.989,6.429-5.067,7.797l-43.582,19.37    c-14.273,6.343-23.496,20.535-23.496,36.154v99.404c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-99.403    c0-0.869,0.062-1.728,0.152-2.58l20.082,20.082c3.125,3.126,4.847,7.281,4.847,11.702v70.2c0,4.142,3.358,7.5,7.5,7.5    c4.142,0,7.5-3.358,7.5-7.5v-70.2c0-8.427-3.281-16.349-9.24-22.308l-23.941-23.942c2.157-2.238,4.745-4.093,7.689-5.402    l42.847-19.043l31.775,31.775v109.119c0,4.142,3.358,7.5,7.5,7.5s7.5-3.358,7.5-7.5V303.194l31.775-31.775l42.846,19.042    c2.944,1.309,5.532,3.164,7.689,5.403l-23.941,23.941c-5.959,5.959-9.24,13.881-9.24,22.308v70.2c0,4.142,3.358,7.5,7.5,7.5    c4.142,0,7.5-3.358,7.5-7.5v-70.2c0-4.42,1.721-8.576,4.847-11.702l20.081-20.081c0.09,0.852,0.152,1.709,0.152,2.578v99.404    c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-99.403C367.709,297.29,358.487,283.098,344.214,276.755z M256,289.481    l-27.881-27.882c2.12-3.567,3.317-7.694,3.317-12.011v-3.052c7.563,3.178,15.862,4.939,24.565,4.939s17.001-1.76,24.563-4.938    v3.051c0,4.318,1.197,8.444,3.318,12.012L256,289.481z M256.001,236.474c-26.805,0.001-48.613-21.807-48.613-48.612v-3.373    c4.68-1.855,9.248-4.807,13.621-8.842c3.043-2.809,3.234-7.554,0.424-10.598c-2.809-3.043-7.553-3.234-10.598-0.425    c-3.751,3.463-7.499,5.7-11.137,6.65c-0.088,0.023-0.153,0.033-0.199,0.037c-0.054-0.105-0.127-0.325-0.127-0.678v-14.835    c0-26.805,21.808-48.613,48.613-48.613h16.032c26.806,0,48.613,21.808,48.613,48.613v1.635c0,0.243-0.146,0.454-0.338,0.492    c-44.911,8.87-67.437-7.847-75.037-15.447c-2.929-2.929-7.678-2.929-10.606,0c-2.929,2.929-2.929,7.678,0,10.606    c23.29,23.29,57.275,23.71,77.965,21.224v13.553C304.614,214.666,282.806,236.474,256.001,236.474z" data-original="#000000" class="hovered-path active-path" data-old_color="#000000" fill="#506690" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M135.242,235.961v-16.035c0-19.566-10.168-36.79-25.489-46.702c0.946-3.035,1.44-6.214,1.44-9.411    c0-17.396-14.152-31.548-31.548-31.548s-31.548,14.153-31.548,31.548c0,3.237,0.49,6.385,1.438,9.413    c-15.32,9.911-25.487,27.135-25.487,46.7v16.032c0,18.947,9.533,35.701,24.048,45.743v16.493c0,3.253-1.807,6.177-4.716,7.632    l-25.941,12.97C6.682,324.176,0,334.988,0,347.015v65.299c0,4.142,3.358,7.5,7.5,7.5s7.5-3.358,7.5-7.5v-62.055l12.218,12.218    c3.125,3.126,4.847,7.281,4.847,11.702v38.135c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-38.135    c0-8.427-3.282-16.349-9.24-22.308L20.82,334.866c-0.082-0.082-0.17-0.153-0.254-0.23c1.067-0.942,2.264-1.762,3.582-2.422    l25.941-12.97c1.329-0.665,2.566-1.45,3.719-2.322l18.337,18.338v77.055c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5    v-77.056l18.338-18.338c1.154,0.873,2.39,1.658,3.719,2.322l7.153,3.577c1.077,0.539,2.221,0.794,3.349,0.794    c2.751,0,5.4-1.52,6.714-4.147c1.853-3.705,0.351-8.21-3.354-10.062l-7.153-3.577c-2.91-1.455-4.717-4.379-4.717-7.631v-16.493    C125.709,271.662,135.242,254.907,135.242,235.961z M79.645,147.265c9.125,0,16.548,7.424,16.548,16.548    c0,1.005-0.09,1.99-0.262,2.955c-5.154-1.582-10.621-2.439-16.286-2.439c-5.657,0-11.117,0.854-16.263,2.432    c-0.173-0.965-0.285-1.945-0.285-2.948C63.097,154.688,70.52,147.265,79.645,147.265z M79.645,179.33    c22.385,0,40.597,18.212,40.597,40.597v2.718c-31.225,9.56-49.834-14.193-50.629-15.234c-1.305-1.739-3.3-2.827-5.468-2.981    c-2.168-0.152-4.298,0.641-5.835,2.178c-7.159,7.159-14.171,10.612-19.235,12.279C39.63,196.981,57.609,179.33,79.645,179.33z     M79.645,321.545l-17.331-17.331c0.506-1.934,0.783-3.95,0.783-6.019v-9.155c5.229,1.634,10.788,2.515,16.548,2.515    s11.319-0.881,16.548-2.515v9.155c0,2.069,0.277,4.086,0.783,6.019L79.645,321.545z M79.645,276.555    c-22.385,0-40.597-18.212-40.597-40.597v-1.554c5.981-1.374,14.849-4.567,24.1-12.007c3.273,3.088,7.951,6.876,13.908,10.125    c7.046,3.843,16.777,7.398,28.663,7.398c4.517,0,9.35-0.525,14.459-1.731C119.015,259.541,101.281,276.555,79.645,276.555z" data-original="#000000" class="hovered-path active-path" data-old_color="#000000" fill="#506690" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M494.561,302.765l-41.973-20.987c-2.909-1.455-4.716-4.379-4.716-7.631v-10.629c9.825-8.723,16.032-21.435,16.032-35.575    v-8.537c0.173,0,0.343,0.005,0.516,0.005c4.142,0,7.5-3.358,7.5-7.5v-16.032c0-26.236-21.345-47.581-47.581-47.581h-16.032    c-26.236,0-47.581,21.345-47.581,47.581v16.032c0,4.142,3.358,7.5,7.5,7.5c0.062,0,0.242-0.002,0.516-0.013v8.545    c0,14.141,6.208,26.853,16.033,35.576v10.629c0,3.253-1.807,6.177-4.717,7.631c-3.705,1.852-5.207,6.357-3.354,10.062    c1.314,2.628,3.963,4.148,6.714,4.148c1.127,0,2.271-0.255,3.348-0.793c1.329-0.665,2.566-1.45,3.719-2.322l18.338,18.338v101.103    c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5V311.21l18.337-18.338c1.154,0.873,2.39,1.658,3.719,2.322l40.615,20.308    l-12.319,12.319c-5.958,5.959-9.24,13.881-9.24,22.308v62.184c0,4.142,3.358,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-62.184    c0-4.42,1.721-8.576,4.847-11.702l11.669-11.669c0.354,1.357,0.548,2.772,0.548,4.224v81.331c0,4.142,3.358,7.5,7.5,7.5    c4.142,0,7.5-3.358,7.5-7.5v-81.331C512,318.956,505.318,308.144,494.561,302.765z M375.725,202.868v-6.99h0.001    c0-17.965,14.616-32.581,32.581-32.581h16.032c17.965,0,32.581,14.616,32.581,32.581v8.331    c-32.603-1.759-52.278-14.446-52.469-14.571c-1.269-0.846-2.717-1.26-4.158-1.26c-1.936,0-3.856,0.748-5.306,2.197    C387.811,197.751,380.78,201.205,375.725,202.868z M416.323,297.497l-17.331-17.331c0.506-1.934,0.783-3.95,0.783-6.019v-1.597    c5.156,1.919,10.731,2.973,16.548,2.973c5.817,0,11.392-1.054,16.548-2.973v1.597c0,2.069,0.276,4.085,0.783,6.019    L416.323,297.497z M416.323,260.524c-17.965,0-32.581-14.615-32.581-32.581v-12.091h0c5.253-2.099,11.373-5.436,17.601-10.742    c7.876,4.098,24.354,11.181,47.561,13.521v9.312C448.904,245.908,434.288,260.524,416.323,260.524z" data-original="#000000" class="hovered-path active-path" data-old_color="#000000" fill="#506690" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Penduduk</span>
                                </div>
                            </a>
                        </li>

                        <li class="menu">
                            <a href="javascript:;" id="karyawan" data-toggle="collapse" aria-expanded="false" class="menus dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="24px" height="24px">
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M421.054,414.843c-4.142,0-7.5,3.358-7.5,7.5v70.514c0,2.283-1.858,4.141-4.141,4.141h-40.317V349.301    c0-4.142-3.358-7.5-7.5-7.5c-4.142,0-7.5,3.358-7.5,7.5v147.698h-81.185l23.543-25.9c2.572-2.83,3.785-6.861,3.244-10.787    c-0.01-0.076-0.022-0.152-0.035-0.228L277.24,327.617l6.041-9.094c3.34,2.372,5.913,4.656,10.738,4.656    c4.908,0,9.497-2.747,11.755-7.269v-0.001l23.65-47.4l53.876,20.865c1.949,0.836,30.252,13.582,30.252,47.238v50.73    c-0.001,4.141,3.357,7.5,7.5,7.5c4.142,0,7.5-3.358,7.5-7.5v-50.73c0-44.344-37.969-60.463-39.585-61.128    c-0.047-0.02-0.095-0.039-0.143-0.057l-89.668-34.726v-21.03c14.242-11.076,24.117-27.495,26.596-46.227    c7.101-0.5,13.69-3.152,19.071-7.779c7.027-6.043,11.059-14.838,11.059-24.126c0-7.708-2.781-15.068-7.737-20.803V92.953    C348.144,41.699,306.446,0,255.192,0c-51.254,0-92.952,41.699-92.952,92.953v28.511c-5.009,5.677-7.733,12.665-7.733,20.074    c0,9.291,4.03,18.085,11.059,24.129c5.377,4.625,11.962,7.274,19.061,7.775c2.499,19.083,12.662,36.114,28.117,47.339v19.92    l-89.571,34.725c-0.047,0.018-0.094,0.037-0.141,0.056c-1.617,0.665-39.585,16.784-39.585,61.128v156.245    c0,10.555,8.587,19.142,19.142,19.142h71.457c4.142,0,7.5-3.358,7.5-7.5c0-4.142-3.358-7.5-7.5-7.5h-16.137V349.301    c0-4.142-3.358-7.5-7.5-7.5c-4.142,0-7.5,3.358-7.5,7.5v147.698h-40.319c-2.283,0-4.141-1.858-4.141-4.141V336.611    c0-33.769,28.493-46.486,30.243-47.234l53.834-20.87l23.652,47.402c2.263,4.533,6.858,7.27,11.756,7.27    c4.801,0,7.349-2.249,10.738-4.656l6.041,9.094l-22.421,132.468c-0.013,0.075-0.024,0.15-0.035,0.226    c-0.542,3.924,0.671,7.957,3.244,10.789l23.543,25.9h-29.995c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h200.365    c10.555,0,19.142-8.588,19.142-19.142v-70.514C428.554,418.201,425.196,414.843,421.054,414.843z M315.375,263.069l-22.049,44.19    c-0.548-0.389-12.233-8.691-26.517-18.834c6.198-7.651-1.053,1.299,27.235-33.617L315.375,263.069z M271.043,309.833l-5.718,8.607    h-18.703l-5.718-8.607l15.07-10.703L271.043,309.833z M227.743,243.121v-14.036c9.112,3.673,18.85,5.376,28.36,5.376    c9.833,0,19.476-2.096,28.052-5.846v14.567l-28.181,34.785L227.743,243.121z M340.881,141.539    c-0.001,4.913-2.129,9.562-5.839,12.753c-2.453,2.11-5.416,3.459-8.661,3.987v-33.477    C335.001,126.202,340.881,133.352,340.881,141.539z M184.007,158.279c-8.718-1.415-14.5-8.623-14.5-16.741    c0-8.018,6.647-14.544,14.5-16.359V158.279z M184.41,109.896c-2.389,0.274-5.127,0.921-7.168,1.615V92.953    c0-42.983,34.968-77.952,77.951-77.952c42.983,0,77.951,34.969,77.951,77.952v18.043c-2.18-0.663-4.441-1.101-6.762-1.307    c0-7.237,0.063-5.841-23.612-31.294c-4.354-4.678-11.556-5.658-17.037-2.077c-26.13,17.069-58.005,25.644-87.415,23.532    C191.867,99.367,185.991,103.616,184.41,109.896z M199.008,164.184v-46.792v-2.465c32.375,1.896,66.318-7.722,93.739-25.283    c10.858,11.658,16.738,17.773,18.634,20.099c0,5.884,0,47.705,0,54.44c0,30.447-24.826,55.276-55.277,55.276    C221.91,219.46,199.008,192.934,199.008,164.184z M218.623,307.259l-22.049-44.19l21.293-8.247l27.241,33.625    C231.255,298.284,219.88,306.366,218.623,307.259z M227.228,461.702l21.709-128.263h14.071l21.709,128.263l-28.744,31.623    L227.228,461.702z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Karyawan</span>
                                </div>
                            </a>
                        </li>

                    <?php } ?>

                    <li class="menu">
                        <a href="#suratSub" id="suratMain" data-toggle="collapse" aria-expanded="false" class="menus dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.042 512.042" style="enable-background:new 0 0 512.042 512.042;" xml:space="preserve" width="512px" height="512px">
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path d="M505.461,179.082l-73.44-53.76v-45.28c0-8.837-7.163-16-16-16h-67.52l-83.04-60.96c-5.623-4.109-13.257-4.109-18.88,0     l-83.04,60.96h-67.52c-8.837,0-16,7.163-16,16v45.28l-73.44,53.76c-4.135,3.021-6.573,7.839-6.56,12.96v272     c0,26.51,21.49,48,48,48h416c26.51,0,48-21.49,48-48v-272C512.034,186.921,509.595,182.103,505.461,179.082z M432.021,165.002     l35.2,25.76l-35.2,20.96V165.002z M256.021,35.882l38.4,28.16h-76.8L256.021,35.882z M112.021,96.042h288v134.88l-144,86.4     l-144-86.4V96.042z M80.021,165.002v46.88l-35.2-21.12L80.021,165.002z M32.021,457.482v-237.12l148.16,88.96L32.021,457.482z      M54.581,480.042l153.44-153.92l39.36,23.52c4.95,2.858,11.05,2.858,16,0l40.64-23.52l153.44,153.92H54.581z M480.021,457.482     l-148.16-148.16l148.16-88.96V457.482z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                                    <rect x="160.021" y="144.042" width="192" height="32" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                                    <rect x="192.021" y="208.042" width="128" height="32" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span>Surat</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="suratSub" data-parent="#accordionExample">
                            <li class="surat-active" id="perusahaan">
                                <a href="javascript:;"> Domisili Perusahaan </a>
                            </li>
                            <li class="surat-active" id="usaha">
                                <a href="javascript:;"> Domisili Usaha </a>
                            </li>
                            <li class="surat-active" id="warga">
                                <a href="javascript:;"> Domisili Warga </a>
                            </li>
                            <li class="surat-active" id="kematian">
                                <a href="javascript:;"> Kematian </a>
                            </li>
                            <li class="surat-active" id="pindah">
                                <a href="javascript:;"> Pindah </a>
                            </li>
                            <li class="surat-active" id="sktm">
                                <a href="javascript:;"> SKTM </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#reportSub" id="report" data-toggle="collapse" aria-expanded="false" class="menus dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512px" viewBox="0 0 496 496" width="512px" class="">
                                    <g>
                                        <path d="m48 448h16v16h-16zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m80 448h16v16h-16zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m112 448h16v16h-16zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m384 448h64v16h-64zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m480 416v-264c0-22.054688-17.945312-40-40-40h-24c0-61.761719-50.238281-112-112-112s-112 50.238281-112 112h-136c-22.054688 0-40 17.945312-40 40v264h-16v40c0 22.054688 17.945312 40 40 40h416c22.054688 0 40-17.945312 40-40v-40zm-40-288c13.230469 0 24 10.769531 24 24v264h-16v-256c0-8.824219-7.175781-16-16-16h-20.71875c1.542969-5.183594 2.65625-10.535156 3.4375-16zm-227.351562-45.398438 84.910156 35.382813 29.074218 87.207031c-7.273437 1.769532-14.824218 2.808594-22.632812 2.808594-52.9375 0-96-43.0625-96-96 0-10.257812 1.65625-20.128906 4.648438-29.398438zm129.183593 117.597657-28.679687-86.039063 64.078125-64.082031c14.175781 16.730469 22.769531 38.328125 22.769531 61.921875 0 39.503906-24 73.488281-58.167969 88.199219zm-37.832031-184.199219c23.59375 0 45.191406 8.59375 61.929688 22.761719l-63.792969 63.789062-83.289063-34.695312c16.007813-30.765625 48.136719-51.855469 85.152344-51.855469zm-272 136c0-13.230469 10.769531-24 24-24h137.28125c.78125 5.464844 1.886719 10.816406 3.4375 16h-132.71875c-8.824219 0-16 7.175781-16 16v256h-16zm448 304c0 13.230469-10.769531 24-24 24h-416c-13.230469 0-24-10.769531-24-24v-24h164.816406c11.503906 10.34375 26.222656 16 41.816406 16h50.742188c15.59375 0 30.3125-5.65625 41.816406-16h100.808594v-16h-107.3125l-2.34375 2.34375c-8.808594 8.808594-20.511719 13.65625-32.976562 13.65625h-50.742188c-12.457031 0-24.167969-4.847656-32.976562-13.65625l-2.335938-2.34375h-123.3125v-256h138.960938c18.023437 37.777344 56.472656 64 101.039062 64s83.015625-26.222656 101.039062-64h26.960938v272h48zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m392 336c-4.910156 0-9.480469 1.496094-13.289062 4.039062l-27.910157-20.925781c.710938-2.265625 1.199219-4.625 1.199219-7.113281 0-13.230469-10.769531-24-24-24s-24 10.769531-24 24c0 2.753906.558594 5.359375 1.414062 7.824219l-44.804687 35.847656c-3.671875-2.289063-7.96875-3.671875-12.609375-3.671875-5.382812 0-10.304688 1.847656-14.3125 4.847656l-34.496094-23c.480469-1.878906.808594-3.816406.808594-5.847656 0-13.230469-10.769531-24-24-24s-24 10.769531-24 24c0 2.03125.328125 3.96875.808594 5.847656l-34.496094 23c-4.007812-3.007812-8.929688-4.847656-14.3125-4.847656-13.230469 0-24 10.769531-24 24s10.769531 24 24 24 24-10.769531 24-24c0-2.03125-.328125-3.96875-.808594-5.847656l34.496094-23c4.007812 3.007812 8.929688 4.847656 14.3125 4.847656s10.304688-1.839844 14.3125-4.847656l34.496094 23c-.480469 1.878906-.808594 3.824218-.808594 5.847656 0 13.230469 10.769531 24 24 24s24-10.769531 24-24c0-2.753906-.558594-5.359375-1.414062-7.824219l44.804687-35.847656c3.671875 2.289063 7.96875 3.671875 12.609375 3.671875 4.910156 0 9.480469-1.496094 13.289062-4.039062l27.910157 20.925781c-.710938 2.265625-1.199219 4.625-1.199219 7.113281 0 13.230469 10.769531 24 24 24s24-10.769531 24-24-10.769531-24-24-24zm-288 48c-4.40625 0-8-3.59375-8-8s3.59375-8 8-8 8 3.59375 8 8-3.59375 8-8 8zm72-48c-4.40625 0-8-3.59375-8-8s3.59375-8 8-8 8 3.59375 8 8-3.59375 8-8 8zm72 48c-4.40625 0-8-3.59375-8-8s3.59375-8 8-8 8 3.59375 8 8-3.59375 8-8 8zm80-64c-4.40625 0-8-3.59375-8-8s3.59375-8 8-8 8 3.59375 8 8-3.59375 8-8 8zm64 48c-4.40625 0-8-3.59375-8-8s3.59375-8 8-8 8 3.59375 8 8-3.59375 8-8 8zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m208 176h-128v112h128zm-16 96h-96v-80h96zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m112 208h64v16h-64zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m112 240h64v16h-64zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m224 256h16v16h-16zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                        <path d="m256 256h160v16h-160zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#506690" />
                                    </g>
                                </svg>
                                <span>Laporan Surat</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="reportSub" data-parent="#accordionExample">
                            <li class="report-active" id="perusahaan">
                                <a href="javascript:;"> Domisili Perusahaan </a>
                            </li>
                            <li class="report-active" id="usaha">
                                <a href="javascript:;"> Domisili Usaha </a>
                            </li>
                            <li class="report-active" id="warga">
                                <a href="javascript:;"> Domisili Warga </a>
                            </li>
                            <li class="report-active" id="kematian">
                                <a href="javascript:;"> Kematian </a>
                            </li>
                            <li class="report-active" id="pindah">
                                <a href="javascript:;"> Pindah </a>
                            </li>
                            <li class="report-active" id="sktm">
                                <a href="javascript:;"> SKTM </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- <div class="shadow-bottom"></div> -->

            </nav>

        </div>
        <!--  END SIDEBAR  -->
<x-layout :title="$page->title . ' - ' . $package->name">
    <nav class="max-w-7xl mx-auto flex items-center justify-between py-8 px-8 xl:py-20">
        <a href="/" class="text-gray-900 transition hover:text-primary-600">
            <svg fill="currentColor" viewBox="0 0 160 32" class="h-auto w-24 md:w-36">
                <path d="M6.21933775,30.869404 C6.53615894,29.3954967 6.8392053,27.9698013 7.12847682,26.5923179 C7.36953642,25.444415 7.6392936,24.172156 7.93774834,22.7755408 L8.1202649,21.922649 L9.59610573,14.8974834 L15.2487417,14.8974834 L16.2405298,10.2484768 L10.3311258,10.2484768 C10.3724503,10.0418543 10.4344371,9.73536424 10.5170861,9.32900662 C10.5997351,8.92264901 10.6686093,8.58172185 10.7237086,8.30622517 C10.944106,7.24556291 11.3435762,6.45006623 11.9221192,5.9197351 C12.5006623,5.38940397 13.2996026,5.12423841 14.3189404,5.12423841 C14.8974834,5.12423841 15.4691391,5.19311258 16.0339073,5.33086093 C16.5986755,5.46860927 17.135894,5.66145695 17.6455629,5.90940397 L19.133245,0.950463576 C18.6924503,0.757615894 18.1793377,0.588874172 17.5939073,0.444238411 C17.0084768,0.299602649 16.392053,0.189403974 15.7446358,0.113642384 C15.0972185,0.0378807947 14.4498013,-7.52892965e-15 13.8023841,-7.52892965e-15 C12.7830464,-7.52892965e-15 11.8050331,0.120529801 10.8683444,0.361589404 C9.93165563,0.602649007 9.07761589,1.00900662 8.30622517,1.58066225 C7.53483444,2.15231788 6.86331126,2.92715232 6.29165563,3.90516556 C5.72,4.88317881 5.28264901,6.10225166 4.97960265,7.56238411 C4.78675497,8.48529801 4.57668874,9.48741722 4.34940397,10.5687417 L4.41676798,10.2484768 L0.991788079,10.2484768 L1.88223241e-15,14.8974834 L3.42974811,14.8974834 L3.37951788,15.1342728 C3.28805298,15.5634967 3.19769007,15.9883126 3.10842914,16.4087205 L2.97536424,17.0360265 C2.75496689,18.0760265 2.55523179,19.0230464 2.37615894,19.8770861 L1.94225166,21.9433113 C1.58410596,23.6513907 1.25695364,25.1976159 0.960794702,26.5819868 C0.664635762,27.9663576 0.365033113,29.3954967 0.061986755,30.869404 L6.21933775,30.869404 Z"></path>
                <path d="M6.21933775 30.869404C6.53615894 29.3954967 6.8392053 27.9698013 7.12847682 26.5923179 7.36953642 25.444415 7.6392936 24.172156 7.93774834 22.7755408L8.1202649 21.922649 9.59610573 14.8974834 15.2487417 14.8974834 16.2405298 10.2484768 10.3311258 10.2484768C10.3724503 10.0418543 10.4344371 9.73536424 10.5170861 9.32900662 10.5997351 8.92264901 10.6686093 8.58172185 10.7237086 8.30622517 10.944106 7.24556291 11.3435762 6.45006623 11.9221192 5.9197351 12.5006623 5.38940397 13.2996026 5.12423841 14.3189404 5.12423841 14.8974834 5.12423841 15.4691391 5.19311258 16.0339073 5.33086093 16.5986755 5.46860927 17.135894 5.66145695 17.6455629 5.90940397L19.133245.950463576C18.6924503.757615894 18.1793377.588874172 17.5939073.444238411 17.0084768.299602649 16.392053.189403974 15.7446358.113642384 15.0972185.0378807947 14.4498013-7.52892965e-15 13.8023841-7.52892965e-15 12.7830464-7.52892965e-15 11.8050331.120529801 10.8683444.361589404 9.93165563.602649007 9.07761589 1.00900662 8.30622517 1.58066225 7.53483444 2.15231788 6.86331126 2.92715232 6.29165563 3.90516556 5.72 4.88317881 5.28264901 6.10225166 4.97960265 7.56238411 4.78675497 8.48529801 4.57668874 9.48741722 4.34940397 10.5687417L4.41676798 10.2484768.991788079 10.2484768 1.88223241e-15 14.8974834 3.42974811 14.8974834 3.37951788 15.1342728C3.28805298 15.5634967 3.19769007 15.9883126 3.10842914 16.4087205L2.97536424 17.0360265C2.75496689 18.0760265 2.55523179 19.0230464 2.37615894 19.8770861L1.94225166 21.9433113C1.58410596 23.6513907 1.25695364 25.1976159.960794702 26.5819868.664635762 27.9663576.365033113 29.3954967.061986755 30.869404L6.21933775 30.869404zM33.0168884 30.869404C33.3199347 29.3954967 33.6160937 27.9698013 33.9053652 26.5923179 34.1946367 25.2148344 34.5252328 23.6582781 34.8971533 21.922649L37.3146367 10.4757616C37.7141069 8.57483444 38.0963586 6.76688742 38.4613917 5.05192053 38.8264248 3.33695364 39.1811268 1.66675497 39.5254977.0413245033L33.2441732.578543046C32.8998023 2.23152318 32.5554314 3.87761589 32.2110606 5.51682119 31.8666897 7.15602649 31.508544 8.81589404 31.1366235 10.4964238L28.7398023 21.9433113C28.3678818 23.6513907 28.0372857 25.1976159 27.7480142 26.5819868 27.4587427 27.9663576 27.1556963 29.3954967 26.8388751 30.869404L33.0168884 30.869404z"></path>
                <path d="M7.76360127,10.0220563 L7.17400019,11.5167484 L9.93683655,13.4295679 C10.08577,13.5317892 10.165237,13.7232391 10.1433155,13.9157181 L10.1433155,13.9157181 L10.1336655,13.9734045 L9.94797514,14.8110642 C9.90120494,15.0220472 9.73878007,15.1744877 9.54721047,15.1871934 L9.54721047,15.1871934 L7.10850424,15.348384 L9.1940752,16.7802068 C9.3430087,16.8824281 9.42247562,17.073878 9.40055415,17.266357 L9.40055415,17.266357 L9.39090414,17.3240433 L9.2052138,18.161703 C9.1584436,18.3726861 8.99601872,18.5251265 8.80444913,18.5378323 L8.80444913,18.5378323 L6.36568243,18.6994056 L8.45131386,20.1308457 C8.60024735,20.2330669 8.67971427,20.4245169 8.65779281,20.6169958 L8.65779281,20.6169958 L8.64814279,20.6746822 L8.46245246,21.5123419 C8.41568226,21.7233249 8.25325738,21.8757654 8.06168779,21.8884711 L8.06168779,21.8884711 L5.62330701,22.0499389 L7.70855252,23.4814845 C7.85748601,23.5837058 7.93695293,23.7751557 7.91503146,23.9676347 L7.91503146,23.9676347 L7.90538145,24.025321 L7.71969111,24.8629808 C7.67292091,25.0739638 7.51049604,25.2264042 7.31892644,25.23911 L7.31892644,25.23911 L4.88049368,25.4004644 L6.96579117,26.8321234 C7.11472467,26.9343446 7.19419159,27.1257946 7.17227012,27.3182735 L7.17227012,27.3182735 L7.1626201,27.3759599 L6.97692977,28.2136196 C6.93015957,28.4246027 6.76773469,28.5770431 6.5761651,28.5897489 L6.5761651,28.5897489 L3.15615734,28.8867356 L2.73059667,30.6834437 L1.65810338e-13,30.6834437 L0.844309309,27.3823469 C0.891079509,27.1713638 1.05350438,27.0189234 1.24507398,27.0062176 L1.24507398,27.0062176 L3.68360647,26.8441405 L1.59820925,25.4132042 C1.44927575,25.310983 1.36980884,25.119533 1.3917303,24.9270541 L1.3917303,24.9270541 L1.40138032,24.8693677 L1.58707065,24.031708 C1.63384085,23.820725 1.79626573,23.6682845 1.98783532,23.6555788 L1.98783532,23.6555788 L4.42598189,23.4936072 L2.34097059,22.0625654 C2.1920371,21.9603441 2.11257018,21.7688942 2.13449165,21.5764152 L2.13449165,21.5764152 L2.14414166,21.5187289 L2.329832,20.6810692 C2.3766022,20.4700861 2.53902707,20.3176457 2.73059667,20.3049399 L2.73059667,20.3049399 L5.16879522,20.1430817 L3.08373193,18.7119265 C2.93479844,18.6097053 2.85533152,18.4182553 2.87725299,18.2257764 L2.87725299,18.2257764 L2.886903,18.16809 L3.07259334,17.3304303 C3.11936354,17.1194473 3.28178842,16.9670068 3.47335801,16.954301 L3.47335801,16.954301 L5.91160855,16.7925562 L3.82649328,15.3612877 C3.67755979,15.2590664 3.59809287,15.0676165 3.62001433,14.8751375 L3.62001433,14.8751375 L3.62966435,14.8174512 L3.81535468,13.9797914 C3.86212488,13.7688084 4.02454976,13.6163679 4.21611935,13.6036622 L4.21611935,13.6036622 L6.65442188,13.4420307 L4.56925462,12.0106488 C4.42032113,11.9084276 4.34085421,11.7169776 4.36277568,11.5244987 L4.36277568,11.5244987 L4.37242569,11.4668123 L4.75211424,10.136163 L7.76360127,10.0220563 Z M9.86368572,-7.2183613e-14 C10.9833126,-7.2183613e-14 11.8129156,0.375364238 12.3524948,1.12609272 C12.892074,1.87682119 13.0539478,2.77562914 12.8381161,3.82251656 C12.5953054,5.02092715 12.0928223,5.83019868 11.3306667,6.25033113 C10.5685111,6.67046358 9.62087508,6.8805298 8.48775876,6.8805298 C7.38162139,6.8805298 6.548646,6.55337748 5.98883258,5.89907285 C5.42901916,5.24476821 5.27051777,4.31152318 5.51332841,3.09933775 C5.74264957,1.99735099 6.2451327,1.20529801 7.0207778,0.723178808 C7.79642291,0.241059603 8.74405888,-7.2183613e-14 9.86368572,-7.2183613e-14 Z" transform="translate(16.045 .186)"></path>
                <path d="M50.1993566 9.69059603C52.1829327 9.69059603 53.8152506 10.0211921 55.0963102 10.6823841 56.3773698 11.3435762 57.2658466 12.2837086 57.7617407 13.5027815 58.2576347 14.7218543 58.3196215 16.1716556 57.9477009 17.8521854 57.8099526 18.5409272 57.6653168 19.24 57.5137937 19.949404 57.3622705 20.6588079 57.2038599 21.3992053 57.0385619 22.170596L57.0385619 22.170596 56.6666413 23.9062252C56.446244 24.9393377 56.2155155 26.0275497 55.9744559 27.1708609 55.7333963 28.3141722 55.4682307 29.5470199 55.1789592 30.869404L55.1789592 30.869404 49.8480983 30.869404 50.1167076 28.1213245 49.6414758 28.1213245C49.1318069 28.8513907 48.5704824 29.4540397 47.9575023 29.9292715 47.3445221 30.4045033 46.6798864 30.762649 45.963595 31.0037086 45.2473036 31.2447682 44.4759129 31.365298 43.6494228 31.365298 42.3408135 31.365298 41.2457142 31.0450331 40.3641248 30.4045033 39.4825354 29.7639735 38.8695552 28.9133775 38.5251844 27.8527152 38.1808135 26.792053 38.1463764 25.6349669 38.4218731 24.381457 38.6284956 23.4172185 38.9625354 22.6113907 39.4239923 21.9639735 39.8854493 21.3165563 40.4433301 20.7862252 41.0976347 20.3729801 41.7519393 19.9597351 42.4751182 19.6325828 43.2671711 19.3915232 44.0592241 19.1504636 44.8822705 18.967947 45.7363102 18.8439735L45.7363102 18.8439735 52.203595 17.8315232C52.3413433 17.2116556 52.2896877 16.6709934 52.0486281 16.2095364 51.8075685 15.7480795 51.3771049 15.3899338 50.7572374 15.1350993 50.1373698 14.8802649 49.3453168 14.7528477 48.3810784 14.7528477 47.8851844 14.7528477 47.358297 14.7907285 46.8004162 14.8664901 46.2425354 14.9422517 45.6605486 15.0524503 45.0544559 15.1970861 44.4483632 15.3417219 43.8250519 15.5207947 43.1845221 15.7343046 42.5439923 15.9478146 41.886244 16.1992053 41.2112771 16.4884768L41.2112771 16.4884768 42.1824029 11.0749669C42.678297 10.9096689 43.2430652 10.7478146 43.8767076 10.589404 44.5103499 10.4309934 45.1784294 10.2829139 45.880946 10.1451656 46.5834625 10.0074172 47.3031976 9.89721854 48.0401513 9.81456954 48.7771049 9.73192053 49.49684 9.69059603 50.1993566 9.69059603zM51.4390917 20.6209272C51.246244 20.7586755 51.0120718 20.8929801 50.7365751 21.0238411 50.4610784 21.154702 50.0822705 21.2855629 49.6001513 21.4164238 49.1180321 21.5472848 48.4637274 21.7022517 47.6372374 21.8813245 47.1000188 22.005298 46.6110122 22.1499338 46.1702175 22.3152318 45.7294228 22.4805298 45.3643897 22.714702 45.0751182 23.0177483 44.7858466 23.3207947 44.592999 23.7133775 44.4965751 24.1954967 44.3588268 24.9531126 44.4896877 25.5419868 44.8891579 25.9621192 45.2886281 26.3822517 45.8327341 26.5923179 46.5214758 26.5923179 47.0173698 26.5923179 47.5167076 26.4855629 48.019489 26.272053 48.5222705 26.058543 49.0043897 25.752053 49.4658466 25.3525828 49.9273036 24.9531126 50.3508797 24.4778808 50.7365751 23.9268874L50.7365751 23.9268874zM81.4766929 13.3703125C81.2596965 12.3334716 80.8185674 11.5063697 80.1533055 10.8890066 79.2923784 10.0900662 78.0905241 9.69059603 76.5477426 9.69059603 75.597279 9.69059603 74.6846963 9.85589404 73.8099943 10.1864901 72.9352923 10.5170861 72.1294645 10.9682119 71.3925108 11.5398675 70.6555572 12.1115232 70.0322459 12.7486093 69.5225771 13.4511258L69.0060208 13.4511258 69.439928 9.93854305 64.2330406 10.2484768C63.8748949 11.9703311 63.5236367 13.6336424 63.1792658 15.2384106 62.8348949 16.8431788 62.5111863 18.389404 62.20814 19.8770861L61.7742327 21.9433113C61.4023122 23.6513907 61.0717161 25.1976159 60.7824446 26.5819868 60.4931731 27.9663576 60.1901267 29.3954967 59.8733055 30.869404L66.0513188 30.869404C66.3543651 29.3954967 66.6505241 27.9766887 66.9397956 26.6129801 67.2290671 25.2492715 67.5390009 23.7960265 67.8695969 22.253245L68.7580737 17.9761589C69.1988684 17.4664901 69.6431069 17.0119205 70.090789 16.6124503 70.5384711 16.2129801 71.0068155 15.8961589 71.4958221 15.6619868 71.9848287 15.4278146 72.5048287 15.3107285 73.0558221 15.3107285 74.0200605 15.3107285 74.6364843 15.6860927 74.9050936 16.4368212 75.1737029 17.1875497 75.1771466 18.1827815 74.9154247 19.4225166L74.3162194 22.2739073C73.9856234 23.8166887 73.6825771 25.2630464 73.4070804 26.6129801 73.1315837 27.9629139 72.8354247 29.3817219 72.5186035 30.869404L78.6759545 30.869404C78.9927757 29.3954967 79.2992658 27.9663576 79.5954247 26.5819868 79.8915837 25.1976159 80.218736 23.6513907 80.5768817 21.9433113 80.7421797 21.1443709 80.904034 20.3729801 81.0624446 19.6291391 81.2208552 18.885298 81.3620473 18.224106 81.4860208 17.6455629L81.456768 17.7801325 81.5003696 17.7322296C81.7957632 17.4123473 82.094218 17.1138926 82.3957338 16.8368653L82.6224446 16.6331126C83.0770141 16.2336424 83.5488022 15.9133775 84.0378088 15.6723179 84.5268155 15.4312583 85.0468155 15.3107285 85.5978088 15.3107285 86.5620473 15.3107285 87.1784711 15.6860927 87.4470804 16.4368212 87.7156896 17.1875497 87.7191333 18.1827815 87.4574115 19.4225166L86.8582062 22.2739073C86.541385 23.8304636 86.2417824 25.2802649 85.9593982 26.6233113 85.6770141 27.9663576 85.3774115 29.3817219 85.0605903 30.869404L91.2386035 30.869404C91.5416499 29.3954967 91.8378088 27.9698013 92.1270804 26.5923179 92.4163519 25.2148344 92.7469479 23.6651656 93.1188684 21.9433113 93.2841665 21.1443709 93.4460208 20.3729801 93.6044314 19.6291391 93.762842 18.885298 93.904034 18.224106 94.0280075 17.6455629 94.5514512 15.2349669 94.3861532 13.3064901 93.5321135 11.8601325 92.6780737 10.4137748 91.197279 9.69059603 89.0897294 9.69059603 88.1392658 9.69059603 87.2232393 9.85933775 86.3416499 10.1968212 85.4600605 10.5343046 84.6439016 10.9923179 83.8931731 11.5708609 83.1424446 12.149404 82.4984711 12.8037086 81.9612526 13.5337748L81.5081587 13.5337748 81.4766929 13.3703125zM108.186652 9.69059603C110.349301 9.69059603 112.112479 10.0831788 113.476188 10.8683444 114.839897 11.6535099 115.76281 12.7554967 116.24493 14.1743046 116.727049 15.5931126 116.733936 17.2460927 116.265592 19.133245 116.155393 19.5878146 116.041751 20.0148344 115.924665 20.4143046 115.83685 20.7139073 115.743224 21.0057616 115.643787 21.2898675L115.643787 21.2898675 115.542413 21.5713907 102.893059 21.5713907 102.88908 21.6528918C102.86 22.4411185 102.97632 23.1267991 103.238042 23.7099338 103.630625 24.5846358 104.281486 25.2389404 105.190625 25.6728477 106.099764 26.106755 107.215526 26.3237086 108.53791 26.3237086 109.116453 26.3237086 109.760426 26.272053 110.46983 26.1687417 111.179234 26.0654305 111.885195 25.9070199 112.587711 25.6935099 113.290228 25.48 113.937645 25.207947 114.529963 24.877351L114.529963 24.877351 113.703473 30.1255629C113.331552 30.3459603 112.821883 30.5525828 112.174466 30.7454305 111.527049 30.9382781 110.779764 31.0966887 109.932612 31.2206623 109.085459 31.3446358 108.172877 31.4066225 107.194863 31.4066225 104.715393 31.4066225 102.645724 30.927947 100.985857 29.970596 99.3259893 29.013245 98.1551283 27.6529801 97.473274 25.8898013 96.7914197 24.1266225 96.6984396 22.0328477 97.1943336 19.6084768 97.6075787 17.6111258 98.3100952 15.8686093 99.3018833 14.3809272 100.293671 12.893245 101.540294 11.7396026 103.041751 10.92 104.543208 10.1003974 106.258175 9.69059603 108.186652 9.69059603zM108.310625 14.0503311C107.608108 14.0503311 106.92281 14.2362914 106.254731 14.6082119 105.586652 14.9801325 104.99089 15.5586755 104.467446 16.3438411 104.15338 16.8149404 103.883944 17.3678623 103.659139 18.0026066L103.659139 18.0026066 103.597165 18.1838411 111.064185 18.0280795 111.087723 17.8505828C111.190176 16.9439621 111.05653 16.1317811 110.686784 15.4140397 110.21844 14.5049007 109.426387 14.0503311 108.310625 14.0503311zM123.877526 30.869404C124.180573 29.3954967 124.476732 27.9801325 124.766003 26.6233113 125.055275 25.2664901 125.365208 23.8098013 125.695804 22.253245L126.584281 17.9761589C127.025076 17.4664901 127.476202 17.0119205 127.937659 16.6124503 128.399116 16.2129801 128.881235 15.8961589 129.384016 15.6619868 129.886798 15.4278146 130.434348 15.3107285 131.026665 15.3107285 132.114877 15.3107285 132.803619 15.6860927 133.092891 16.4368212 133.382162 17.1875497 133.38905 18.1827815 133.113553 19.4225166L132.514348 22.2739073C132.197526 23.8166887 131.897924 25.2630464 131.61554 26.6129801 131.333155 27.9629139 131.033553 29.3817219 130.716732 30.869404L136.894745 30.869404C137.211566 29.3954967 137.518056 27.9663576 137.814215 26.5819868 138.110374 25.1976159 138.430639 23.6513907 138.77501 21.9433113 138.954083 21.1443709 139.122824 20.3729801 139.281235 19.6291391 139.439646 18.885298 139.580838 18.224106 139.704811 17.6455629 140.21448 15.2349669 140.035407 13.3064901 139.167593 11.8601325 138.299778 10.4137748 136.750109 9.69059603 134.518586 9.69059603 133.540573 9.69059603 132.60044 9.85589404 131.698189 10.1864901 130.795937 10.5170861 129.972891 10.9682119 129.22905 11.5398675 128.485208 12.1115232 127.858454 12.7486093 127.348785 13.4511258L126.832228 13.4511258 127.266136 9.93854305 122.059248 10.2484768C121.701103 11.9703311 121.349844 13.6370861 121.005473 15.2487417 120.661103 16.8603974 120.337394 18.4031788 120.034348 19.8770861L119.60044 21.9433113C119.242295 23.6376159 118.915142 25.1803974 118.618983 26.5716556 118.322824 27.9629139 118.016334 29.3954967 117.699513 30.869404L123.877526 30.869404zM151.206061 31.4272848C151.701955 31.4272848 152.239173 31.3825166 152.817716 31.2929801 153.396259 31.2034437 153.936921 31.0863576 154.439703 30.9417219 154.942484 30.7970861 155.338511 30.6283444 155.627782 30.4354967L156.288974 25.373245C155.751756 25.7451656 155.217981 26.0068874 154.68765 26.1584106 154.157319 26.3099338 153.671756 26.3856954 153.230961 26.3856954 152.225398 26.3856954 151.5401 26.0413245 151.175067 25.3525828 150.810034 24.6638411 150.772153 23.6582781 151.061425 22.335894L152.621801 14.8974834 158.768445 14.8974834 159.760233 10.2484768 153.605112 10.2484768 153.646789 10.0547682C153.735895 9.63764901 153.821611 9.23457368 153.903937 8.84554222L153.985133 8.46119205C154.198643 7.44874172 154.40871 6.46384106 154.615332 5.50649007 154.821955 4.54913907 155.035465 3.53324503 155.255862 2.45880795L148.933213 3.55390728C148.643941 4.91761589 148.365001 6.24 148.096392 7.5210596 147.935226 8.28969536 147.760423 9.1104 147.571984 9.98317351L147.514516 10.2484768 144.180895 10.2484768 143.189107 14.8974834 146.533324 14.8974834 146.507567 15.0224773 146.43308 15.3830464C146.212683 16.450596 146.002617 17.4492715 145.802882 18.3790728 145.603147 19.3088742 145.413743 20.2042384 145.23467 21.0651656 145.055597 21.9260927 144.869637 22.8042384 144.676789 23.6996026 144.304868 25.4490066 144.346193 26.8953642 144.800763 28.0386755 145.255332 29.1819868 146.037054 30.0325828 147.145928 30.5904636 148.254802 31.1483444 149.60818 31.4272848 151.206061 31.4272848z"></path>
            </svg>
        </a>

        <a
            href="https://github.com/laravel-filament/filament"
            target="_blank"
            class="text-gray-900 transition hover:text-primary-600"
        >
            <svg fill="currentColor" viewBox="0 0 29 29" class="w-7 h-7">
                <path fill-rule="evenodd" d="M1372.32,16.8097415 C1372.32,23.1517351 1376.33105,28.5314586 1381.89427,30.4295626 C1382.59472,30.5617425 1382.84997,30.1184991 1382.84997,29.7378209 C1382.84997,29.3976778 1382.83794,28.4944483 1382.83107,27.296898 C1378.9369,28.1639984 1378.11527,25.3723581 1378.11527,25.3723581 C1377.47841,23.7139404 1376.56052,23.2724594 1376.56052,23.2724594 C1375.2894,22.3824478 1376.65678,22.4000718 1376.65678,22.4000718 C1378.06198,22.5014098 1378.80111,23.8796059 1378.80111,23.8796059 C1380.04989,26.0729117 1382.07819,25.4393292 1382.87576,25.071869 C1383.00296,24.144847 1383.36478,23.5121457 1383.76443,23.1534975 C1380.6558,22.7913244 1377.38731,21.5594074 1377.38731,16.0589595 C1377.38731,14.4921866 1377.93306,13.2100411 1378.82861,12.207236 C1378.68422,11.8441818 1378.20379,10.384034 1378.96612,8.40838451 C1378.96612,8.40838451 1380.14099,8.02241909 1382.8156,9.87998785 C1383.93202,9.56099359 1385.13009,9.40237767 1386.32043,9.39620927 C1387.50991,9.40237767 1388.70712,9.56099359 1389.82526,9.87998785 C1392.49815,8.02241909 1393.6713,8.40838451 1393.6713,8.40838451 C1394.43535,10.384034 1393.95492,11.8441818 1393.81139,12.207236 C1394.70866,13.2100411 1395.25011,14.4921866 1395.25011,16.0589595 C1395.25011,21.5735066 1391.97647,22.7869184 1388.85838,23.1420419 C1389.3603,23.5852853 1389.80808,24.4611977 1389.80808,25.8006211 C1389.80808,27.7189926 1389.79089,29.2672603 1389.79089,29.7378209 C1389.79089,30.1220239 1390.04356,30.5687921 1390.75347,30.4286814 C1396.31239,28.5261714 1400.32,23.1499727 1400.32,16.8097415 C1400.32,8.8815887 1394.05118,2.455 1386.31871,2.455 C1378.58882,2.455 1372.32,8.8815887 1372.32,16.8097415 Z" transform="translate(-1372 -2)"></path>
            </svg>
        </a>
    </nav>

    <div class="space-y-24">
        <div class="space-y-24 max-w-7xl mx-auto px-8 md:flex md:flex-row-reverse md:space-y-0">
            <main class="flex-1 overflow-x-auto">
                <div class="prose">
                    <h1 class="font-heading">
                        {{ $page->title }}
                    </h1>

                    @markdown($page->content)
                </div>
            </main>

            <aside class="flex-shrink-0 space-y-8 md:min-w-[16rem] md:mr-16">
                <div
                    x-data="{ package: '{{ $package->slug }}', version: '{{ $version->slug }}' }"
                    x-init="
                        $watch('package', () => window.location = `/docs/{{ $version->slug }}/${package}`)
                        $watch('version', () => window.location = `/docs/${version}/{{ $package->slug }}`)
                    "
                    class="space-y-2 -mx-3"
                >
                    <select x-model="package" class="block w-full h-10 border-gray-300 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                        @foreach (\App\Models\DocumentationPackage::orderBy('name')->get()->unique('slug') as $documentationPackage)
                            <option value="{{ $documentationPackage->slug }}">
                                {{ $documentationPackage->name }}
                            </option>
                        @endforeach
                    </select>

                    <select x-model="version" class="block w-full h-10 border-gray-300 transition duration-75 rounded-lg shadow-sm focus:border-primary-600 focus:ring-1 focus:ring-inset focus:ring-primary-600">
                        @foreach (\App\Models\DocumentationVersion::orderByDesc('id')->get() as $documentationVersion)
                            <option value="{{ $documentationVersion->slug }}">
                                {{ $documentationVersion->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <ul class="space-y-4">
                    @foreach ($package->getPages() as $page)
                        @php
                            $isActive = request()->route()->parameter('pageSlug') === $page->slug;
                        @endphp

                        <li @class([
                            'font-medium uppercase tracking-wider',
                            'text-gray-900 hover:text-primary-600 focus:text-primary-600' => ! $isActive,
                            'text-primary-500 hover:text-primary-600 focus:text-primary-600' => $isActive,
                        ])>
                            <a href="{{ $page->getUrl() }}">
                                {{ $page->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>

        <section class="relative bg-pink-500 flex justify-center">
            <div class="max-w-7xl w-full flex justify-center text-center mx-auto px-8 py-16">
                <div class="max-w-2xl space-y-8">
                    <div class="space-y-4">
                        <h2 class="font-heading font-bold text-yellow-200 text-4xl">
                            Enjoying Filament?
                        </h2>

                        <p class="text-xl text-white">
                            We are open source at heart. To allow us to <strong>build new features</strong>, <strong>fix bugs</strong>, and <strong>run the community</strong>, we require your financial support.
                        </p>
                    </div>

                    <a
                        href="https://github.com/sponsors/danharrin"
                        target="_blank"
                        class="group inline-flex items-center justify-center px-6 text-xl font-semibold tracking-tight text-white transition rounded-lg h-11 ring-2 ring-inset ring-white hover:bg-yellow-200 hover:text-pink-500 hover:ring-yellow-200 focus:ring-yellow-200 focus:text-pink-500 focus:bg-yellow-200 focus:outline-none"
                    >
                        Sponsor Filament on GitHub

                        <x-heroicon-o-heart class="ml-2 -mr-3 w-7 h-7 transition-all group-hover:scale-125" />
                    </a>
                </div>
            </div>

            <div class="hidden absolute left-0 bottom-0 ml-12 -mb-2 xl:block">
                <img
                    src="{{ asset('images/dragon.svg') }}"
                    alt="Dragon"
                    class="h-[16rem]"
                />
            </div>

            <div class="hidden absolute right-0 top-0 mt-12 mr-12 xl:block">
                <img
                    src="{{ asset('images/diamond.svg') }}"
                    alt="Diamond"
                    class="h-[8rem]"
                />
            </div>
        </section>
    </div>
</x-layout>

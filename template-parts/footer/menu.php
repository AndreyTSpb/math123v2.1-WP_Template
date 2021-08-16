<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 23/07/2021
 * Time: 22:33
 */
?>
<?php

$wp_menu_footer = wp_nav_menu( [
    'menu'            => 'footer',
    'container'       => 'div',
    'menu_class'      => 'footer-contact',
    'echo'            => false,
    'fallback_cb'     => 'wp_page_menu',
    'depth'           => 0
] );
//print_r($wp_menu_footer);
?>
<div class="footer-contact">
                <div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="1.658cm" height="1.164cm">
                        <image  x="0px" y="0px" width="47px" height="33px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAhCAQAAADjJDpXAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflBhQAHxrqXuIdAAADB0lEQVRIx7WWS2yUVRSAvxkGWi0pqdHEBSGU1tBWC2F04QPFWFIeRo0VCTEkGIwxIQ2u3KASnzEuMCHBRFmYdKELsYmC+IwPqNaINEpQ0rSkVUpVJvIwUttKp5+bdvzvtDOdGey5q/88vv/ce/5z/hvzPt5ldmSMbXFGODtL+BRD8VlCT0hiGt0lRplDcS9OI3OZNzM+zae8ipQXhR8hTivN2UlNxcdpoImXSRWFv4Yd1BOboneNf6hjDhuVLh80LgWtmC1+G0QPmVYHfWgS3+9j7vdSxOWML1hVAHyBzzsYifvH933E30J8j9UucqdngxwOeNsMea/0PUcjMed9zoVWeyo7+wYx4QaPB9vsttUrc8CvsNWewPtHN1kuLvPXEN/n9RNBDbY5Hgn52zdcMg18sXu9GBxKm0snbHnweJXbPRNk9Y13GwsOpdnOwCNlq/Mz9rx4jLvKDsci4ad9MlPoKp9yIGIb82ubg+9sBjxitbs8H4EM227S+S7znaCYF9zldVmxGXwiZ6P0s5MunqZu4rmcFhbzPUlWRLx+4lk+5GIuSG48DPEWV7M7okmSDDzGeZ19+Zo5/+Baz+PAzwxMYxvgF+JsZ12p+LXsZgmfs44tHGE8sB3lYdbzMbXsoSkPI2dpmzyhdniDiDXu8c9MZ75mrYiNfqb2ujpXaXPhV3pM/crGjKbSrXY7ao+PWpHRLrdD7fauYvA3+4Pa6Y1ZWa3yRe8MGgyTdqrHvLVQ/E0eVbuCgP8abqruFo+o37m8EHyjX6g9rilw2iOu9oT6pfUz4ev8SO3z3iLgiPfYp35iXS58vVjrfvWk9xcJR2yxXz1ondiY/TvptcaF7lP73FgCHPEB+9V2F1njYDhzZCmb2ECKZ3ib0qSdCl6ihb94k3TYVuc8rP7ulhIzn1ybPa0e8kKYfRW3M8xeDnJtkReoYATwATU8wR2TiujEHKWWVygrGQ4wQhkjVETxk5efBWxkzmXBAdKZ3ccgwTwqM4+XDyfCqKAswSnaqMwat/+HzCVF779aN5TL4LaS+QAAAABJRU5ErkJggg==" />
                    </svg>
                </div>
                <a href= "/kontakty"><h6>контакты</h6></a>
            </div>
            <div class="footer-partners">
                <div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="1.623cm" height="1.411cm">
                        <image  x="0px" y="0px" width="46px" height="40px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAoCAQAAAAr6QChAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflBhQAADD8vyVVAAAE2ElEQVRIx43XfZBXdRXH8S/LumCJLFuL7NiMk4OIFi0wQqGjgE41o8OMT405TjsL1EBRTTZqIDOEpK2hmJZak+PDqKjQTLooPTCOkzWRmBGVsyJFgcgzmSgpuyz76o979u79/fb+Fr/3n917z/e9537O55zv3SSVXE2+bZ6G0meVV53FDuvUXPa0bMNYz4EfGnkC9HDfdRxs0PJB4B/VqX/92Igh4csDDb8y7kTwxkD3xZb7aopTZ0XEvOSdwDcPBW/2LHjPIitj6z0+ZJRWn9ZitKv9wD2WmWFZZL3aaPO8B35TKU6lIBn6fQskJ/lRvEOnF+22X5ctjsafPKQ30KMkyQL/C/y4Mni/IN0W5i9+t7I1oPPjTsn3z43sf+0j1fBm60KQBYV3aXBX4I4Ebq9bXOeRyHtRhajt3g3tW4rwfvRRX60qW4MOr3jGXvCm2XH/Rscd01YVXaV9kozJ0QurgrNrms36cnSDZR413WWucdKg2LneD3HGSsmkKOMRXylFT/YqeMOFkpP9BKyt6f02B0Oc1uTpQM8vDZ3iNbDLTEm9+6PoN6iriV8V9VmavADe9vmSsNbIerfZkhGRNb8dAj3L6+Df5iSXeCV8cNmgGbO5kPUoD+cWPOImw2qgd4Adzs8KOiHwB1xaEXg92B5aPwh6dOnFMYtL0LPtiqwvGLDi2f4E/mNOIfQB8A1JQ6DpMNbj8fOSKvQldoOdGXqgic62KbL/bB6ctf/DpueC3GG4pMnPo7WK2Z/p72CbGYPbf2Ko9XTu3kv1oi+sxZ35hBxjTYj0nYKvDsagK5ktMx1Gn28VSrUy2pwet1c45FSrY6zdHHfqLXUc24yvhg9zH/hZlcnarbfROl8cVLwxnszFydKpC1tfUw0faQNolSTjfc0K1xojm5fljm60tkqcrMXmV8NHWA9mSK7zZmz6s8k1wHVGFPDHLZGMDM9dPljz28A634zBma1NmkrQzR7Qaaqk0ROg11L3gq6B06g4RQ4UoC9YbDu4sgR+RZjuPMloT1UcJIWhXdzy9RiXbNAsxUGx3XJnVME/YSfYapqkMYxJn9sNL4dPiiPheS2Sj8dQgNd8sgp/UdRlq+mSxsi+W3sxqjJz+J0WyVnRsf3rl4OkmRlNl4nTGMbcNHCCVsK/B26RjM9nzZddaTeOaiscxtl1QS7OdMnH/AOHnFcO/xJ4w0pbwFuukNTn7/CyKZqdViLO6y72BfuwpyhgEX5aQWUOuEpSryP/VmG7P3rZ3cZJTg58lv07DoNfxP1B8GSq3+sJS2Un6vfjw64zzpdsrdHuRcvVSy4K7eGfptYqaDaQLteFHm2adMSmVaboAu86FKaDezVIHoq3+qmJlbSy1l4O9toYiFU+ZSPYY45n0GNriLXajXai11WDSWXwM+NYzuZLhwlR0j0uNN/b6NHuhgqrbjL6g8GTSdbaD57TGlkfMMu8/DvxL85xve747a8+U8YphyfDzHUMO2yLrGdZqBvdjujD39zkMPZb4vRySi140hQZi0a5NXz0khXxRZitJ2sShoAn0zzvoH35OBOO3pX/38G/nF+bMEwaYp2azk3H0oR0Rzo9pZTSljQ5nvw3PZU+nPalx9KrtbcPDe9frelzqTFtTn9IbWlRak5b0m1p/Ym3/R9cNoiYKsn3SQAAAABJRU5ErkJggg==" />
                    </svg>
                </div>
                <a href="/partners"><h6>партнёры</h6></a>
            </div>
            <div class="footer-vakant">
                <div>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="1.588cm" height="1.235cm">
                        <image  x="0px" y="0px" width="45px" height="35px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAjCAQAAACqGUthAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflBhQAAxDs/FZeAAADNUlEQVRIx52WS2xMURjHf53e6Xh0pq16ZeoRQpASuhBFQkSIBapdSLwSLLwWIuKdEBtssCUSITYWhC6IhUYE0W6UYCGqFGm82lJVr9b8Le7pdWfunfbUdxZz7vm+87vf/R7nDCIwRuiQ6tWiZl3SMkVCLKxGcKlUt/VPunRMTr+Qg1WhkjB0vm4pU7b3C12lNt3XZg3PVKxWUBo0xho8RLWSpE4tiZAuSwjKMMrIwU7WUQ7AAx5loseGmMcYaYkuYR8APznN+0z0h5ANv/mIrND7GAlALdUE0rg+JNbPNNYqznPUbnYsC6uQoaoLoHdZgfNVbeyvueUaNJmhxz5sSqcs67rC7OjU0mwtg8bruB6rSY2q0XrFrMBRvTDoGiWyo1GOkpqqKSqwrue93nde0eBwdEKJHlU/xkS1eegbyndXnbT63cRyUvygiavcJWXZJlH2Uug9xT2mL1oH9Mt79xdVWvs8T599iX+q0ZkBWeRVpStN1pHuOdC69VXSW5Wlox1dD9TzSSvwGmP9R9W6J6ldC9PRc0O6sEPT+gQXqNFYv1e57kv6rSpX13OGrAxJTz77ifZ5aowzs5vUMRCIMsifxqSeK0zataBXn8v0zuvaiYrroSRph9/rWZSE+pRgPwOzepzLbnPSwTkayDPz0e5PBIhSTizL9kVUZkVXssrMOjniW0+6DkeAODPJzQrYQzyL5idP+APAWd741oe6GYoARd5nhcl0toSEwgGuMZ/tPKKZ83T7tHETA6F5+pKRvpReqcV7eqHJQihXCU3XGh3WGU3yUlmixebYLVK9uTqG9ZwhEygI+FXDS46a+Xh2c5VSSplKkmIcOjjnWTbTbGbCveaKKOQTOEBRSBjyOEEFswDIYQMb07RRtrLCqwiRA6TIM7VRQDENLjoZgo7RzTbumdLLvM8HsK6X7MTcxEeAaSFqEaWeg/yfVLGJ2Qi9DnRhShcVE4rrslKSpC79kL10SzriAGOyvr2DnTgU08gdFrLa2utcQE4f/4vesJYBtJFiVD+DEnF66UNXvvENgC5a6bIGF/LdSbsdfe8MrFzgtmlrGxnEa4cI0BoIy9eA8b/WsJS/2mpDhJ4olY4AAAAASUVORK5CYII=" />
                    </svg>
                </div>
                <a href= "/vacancies"><h6>вакансии</h6></a>
            </div>
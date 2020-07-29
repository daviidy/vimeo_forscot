@extends('layouts.menu-default')
@section('title', 'Tableau de bord')
@section('content')

<style media="screen">

  @media only screen and (max-width: 1024px) {
  .showMenu{display: none;}
  ..dHNJSo{
    display: flex;
    flex-wrap: wrap;
  }
}
</style>

<div id="root">
  <div data-qa="workspace-loaded" class="BaseStylesRoot-sc-1e3800-0 wjWNB app__Root-sc-1yawme2-1 ixLSZX">
    <div height="full" orientation="vertical" class="Split-sc-3xe4fi-0 bpPqLs">
      <div class="SplitItem-sc-3xe4fi-1 cgtgYN">
        <div>
          <script type="text/javascript" src="https://public-assets.typeform.com/chief/chief-app.js"></script>
          <div class="BaseStylesRoot-sc-1e3800-0 kAPuDf">
            <header>
              <div class="workspace-header__HeaderSections-sc-1b4cv31-0 ibMSue">
                <!--LOGO-->
                <div class="workspace-header__LeftSection-sc-1b4cv31-1 kTBADe">
                  <a href="/" class="Link-sc-1bfji0h-0 duFmNq">
                    <div class="LogoRoot-z2yz42-0 dzvAIR">
                      <span class="SVGInline">
                        <img src="https://forscot.oschoolelearning.com/images/schools/logos/1590163066.png" alt="" width="150">
                      </span>
                    </div>
                  </a>
                </div>
                <!--END LOGO-->
                <div class="workspace-header__RightSection-sc-1b4cv31-2 iZaDae">
                  <div class="Spacer-cjod5i-0 gaKPPk">
                    <button data-qa="header-upgrade-plan" class="upgrade-plan__UpgradeButtonWrapper-a3r92d-0 lcvuvW ButtonRoot-sc-1dguzy0-0 wVNYX">
                      <div orientation="horizontal" class="Distribute-oruih0-0 hZoDMF">
                        <span font-family="sans" class="Text-wqps8m-0 gNQquP">Upgrade</span>
                      </div>
                    </button>
                  </div>
                  <div class="account-dropdown__Root-sc-1eei6rg-0 cFlmbQ">
                    <div content="[object Object]" width="none" class="PopoverRoot-sc-1vzvfd2-0 eNbGaT">
                      <button aria-controls="kitt-0" aria-expanded="false" aria-haspopup="true" class="Trigger-sc-1vzvfd2-1 jImnYR popup-btn">
                        <div data-qa="header-account-dropdown" class="account-dropdown__AccountDropdownBtnContent-sc-1eei6rg-1 hcThDZ">
                          <div orientation="horizontal" class="Distribute-oruih0-0 bPImXl">
                            <div aria-label="Arsène" class="PictureWrapper-sc-15cvr7j-0 kqgAOh">
                              <span font-weight="medium" font-family="sans" class="Text-wqps8m-0 AvatarText-sc-15cvr7j-1 PUYcU">A</span>
                              <img alt="Gravatar for k2.aouman@gmail.com" src="//www.gravatar.com/avatar/8a033c9384ee8919792f4fc1aac958c5?d=blank&amp;r=g&amp;s=50" srcset="//www.gravatar.com/avatar/8a033c9384ee8919792f4fc1aac958c5?d=blank&amp;r=g&amp;s=100 2x" height="50" width="50"
                                class="react-gravatar Picture-sc-15cvr7j-2 hJGLaD">
                                <svg fill="#e4b83a" height="32" width="32" class="ShapeWrapper-sc-15cvr7j-3 cqCYBg">
                                <mask height="32" id="kitt-2" maskUnits="userSpaceOnUse" width="32" x="0" y="0">
                                  <circle cx="16" cy="16" fill="#ffffff" r="16"></circle>
                                </mask>
                                <g fill="inherit" mask="url(#a)">
                                  <g>
                                    <path d="M45.766 8.824c4.18.716-12.161 15.5 0 37.5 7.5 7.5-7.98-4.665-12.161-5.38-4.18-.716-21.273-6.247-19.84-14.62 1.434-8.372 27.82-18.216 32-17.5z"></path>
                                    <path clip-rule="evenodd"
                                      d="M14.198 7.65c.581-4.731.035-9.123-2.76-12.774l.793-.607c3.015 3.936 3.558 8.63 2.96 13.503-.59 4.793-2.292 9.83-3.902 14.59l-.07.207c-1.64 4.854-3.155 9.388-3.378 13.192-.11 1.892.103 3.567.755 4.992.649 1.416 1.748 2.62 3.476 3.554l-.475.88c-1.903-1.028-3.163-2.388-3.91-4.018-.742-1.62-.96-3.472-.844-5.466.232-3.968 1.803-8.642 3.43-13.455l.052-.155c1.622-4.797 3.297-9.752 3.873-14.443z"
                                      fill-rule="evenodd"></path>
                                  </g>
                                </g>
                              </svg>
                            </div>
                            <div class="account-dropdown__DropdownHeader-sc-1eei6rg-3 bZTMBg">
                              <span data-qa="selected-account-name" font-family="sans" class="Text-wqps8m-0 account-dropdown__AccountTitle-sc-1eei6rg-4 iAYwiw">Arsène</span>
                              <div height="auto" width="auto" color="#898989" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 ddHnXp">
                                <span class="SVGInline">
                                  <svg class="SVGInline-svg" width="12" height="7" viewBox="0 0 12 7" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M6.00008 3.58581L3.12139 0.707124C2.34035 -0.0739251 1.07402 -0.0739234 0.292969 0.707125L6.00008 6.41423L11.7072 0.707125C10.9261 -0.0739234 9.6598 -0.0739234 8.87876 0.707125L6.00008 3.58581Z"></path>
                                  </svg>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </button>
                      <div aria-hidden="true" id="kitt-0" class="ContentWrapper-sc-1vzvfd2-2 iPhDdx">
                        <div class="AnimateRoot-sc-8m2keq-0 cOBWBU">
                          <div>
                            <style media="screen">
                              .Card-jmx009-0{display: none;}
                            </style>
                            <!--Popup users-->
                            <div color="#262627" class="Card-jmx009-0 gUoGCQ scaleFromTopRight-enter-done">
                              <div class="OptionsWrapper-sc-16l3vsu-0 chCkUA">
                                <div class="Group-sc-16l3vsu-2 RibsQ">
                                  <div class="Option-sc-16l3vsu-1 crfocN" style="padding: 06px 15px;">
                                    <a color="#262627" href="/account#/accounts/01DX48P3KBMQSCBKYZB47NYYQ6" target="_self" class="Link-sc-1bfji0h-0 OptionLink-sc-16l3vsu-6 clUonR">
                                      <span font-family="sans" class="Text-wqps8m-0 gkfKpX">
                                        <a class="Link-sc-1bfji0h-0 account-dropdown__AccountSettingsLinkButton-sc-1eei6rg-2 bKjAhI">
                                          <div orientation="horizontal" class="Distribute-oruih0-0 kPgcSX">
                                            <div aria-label="Arsène" class="PictureWrapper-sc-15cvr7j-0 kqgAOh"><span font-weight="medium" font-family="sans" class="Text-wqps8m-0 AvatarText-sc-15cvr7j-1 PUYcU">A</span><img alt="Gravatar for k2.aouman@gmail.com"
                                                src="//www.gravatar.com/avatar/8a033c9384ee8919792f4fc1aac958c5?d=blank&amp;r=g&amp;s=50" srcset="//www.gravatar.com/avatar/8a033c9384ee8919792f4fc1aac958c5?d=blank&amp;r=g&amp;s=100 2x" height="50" width="50"
                                                class="react-gravatar Picture-sc-15cvr7j-2 hJGLaD"><svg fill="#e4b83a" height="32" width="32" class="ShapeWrapper-sc-15cvr7j-3 cqCYBg">
                                                <mask height="32" id="kitt-5" maskUnits="userSpaceOnUse" width="32" x="0" y="0">
                                                  <circle cx="16" cy="16" fill="#ffffff" r="16"></circle>
                                                </mask>
                                                <g fill="inherit" mask="url(#a)">
                                                  <g>
                                                    <path d="M45.766 8.824c4.18.716-12.161 15.5 0 37.5 7.5 7.5-7.98-4.665-12.161-5.38-4.18-.716-21.273-6.247-19.84-14.62 1.434-8.372 27.82-18.216 32-17.5z"></path>
                                                    <path clip-rule="evenodd"
                                                      d="M14.198 7.65c.581-4.731.035-9.123-2.76-12.774l.793-.607c3.015 3.936 3.558 8.63 2.96 13.503-.59 4.793-2.292 9.83-3.902 14.59l-.07.207c-1.64 4.854-3.155 9.388-3.378 13.192-.11 1.892.103 3.567.755 4.992.649 1.416 1.748 2.62 3.476 3.554l-.475.88c-1.903-1.028-3.163-2.388-3.91-4.018-.742-1.62-.96-3.472-.844-5.466.232-3.968 1.803-8.642 3.43-13.455l.052-.155c1.622-4.797 3.297-9.752 3.873-14.443z"
                                                      fill-rule="evenodd"></path>
                                                  </g>
                                                </g>
                                              </svg></div>
                                          </div>
                                          <div orientation="vertical" class="Distribute-oruih0-0 bbDBOe">
                                            <span color="#262627" font-family="sans" class="Text-wqps8m-0 account-dropdown__AccountNameText-sc-1eei6rg-5 dNiJVS">Arsène</span>
                                            <span font-family="sans" class="Text-wqps8m-0 jlgkUM">Settings</span>
                                          </div>
                                        </a>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                                <div class="Group-sc-16l3vsu-2 RibsQ">
                                  <div data-qa="dropdown-help-center" class="Option-sc-16l3vsu-1 crfocN">
                                    <a color="#262627" href="https://www.typeform.com/help/" target="_blank" class="Link-sc-1bfji0h-0 OptionLink-sc-16l3vsu-6 clUonR">
                                      <span font-family="sans" class="Text-wqps8m-0 gkfKpX">
                                        <span font-family="sans" class="Text-wqps8m-0 jlgkUM">Help Center</span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="Option-sc-16l3vsu-1 crfocN">
                                    <button class="OptionButtonWrapper-sc-16l3vsu-5 iwJkie">
                                      <span color="#262627" font-family="sans" class="Text-wqps8m-0 exBQQl">
                                        <span font-family="sans" class="Text-wqps8m-0 jlgkUM">What's new 🚀</span>
                                      </span>
                                    </button>
                                  </div>
                                </div>
                                <div data-qa="dropdown-logout-link" class="Option-sc-16l3vsu-1 crfocN">
                                  <a color="#262627" href="/login/logout" target="_self" class="Link-sc-1bfji0h-0 OptionLink-sc-16l3vsu-6 clUonR">
                                    <span font-family="sans" class="Text-wqps8m-0 gkfKpX"><span
                                        color="#D95767" font-family="sans" class="Text-wqps8m-0 jsmscX">Log out</span>
                                      </span>
                                    </a>
                                  </div>
                              </div>
                            </div>
                            <!--End Popup users-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div content="[object Object]" width="none" class="account-dropdown__OganizationsPopoverMenu-sc-1eei6rg-6 dlSGlN PopoverRoot-sc-1vzvfd2-0 eNbGaT"><button aria-controls="kitt-3" aria-expanded="false" aria-haspopup="true"
                        class="Trigger-sc-1vzvfd2-1 jImnYR"></button>
                      <div aria-hidden="true" id="kitt-3" class="ContentWrapper-sc-1vzvfd2-2 ldywQO">
                        <div class="AnimateRoot-sc-8m2keq-0 bfAEZv">
                          <div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div></div>
                <div class="AnimateRoot-sc-8m2keq-0 eDPEWi">
                  <div></div>
                </div>
              </div>
            </header>
          </div>
        </div>
      </div>
      <div height="remaining" class="SplitItem-sc-3xe4fi-1 eOxpZy">
        <div class="app__Content-sc-1yawme2-0 gMOKku">
          <div height="full" orientation="horizontal" class="Split-sc-3xe4fi-0 icTzDS">
            <div width="medium" class="SplitItem-sc-3xe4fi-1 iSdzAX showMenu">
              <div height="full" class="Container-sc-14tr3x4-0 cLxjui">
                <div class="ScrollContentRoot-sc-1ukpyz-2 cKSoih">
                  <div class="TopSectionWrapper-sc-1ukpyz-0 htlbiW">
                    <div class="Container-sc-14tr3x4-0 dXwQFy">
                      <div orientation="horizontal" class="Spread-sc-1pjvgl-0 hBfqtO">
                        <div orientation="horizontal" class="Distribute-oruih0-0 hcuFtA"><span color="#262627" font-weight="medium" font-family="sans" class="Text-wqps8m-0 JjprQ">Workspaces</span></div>
                        <div orientation="horizontal" class="Distribute-oruih0-0 bQSMLn">
                          <div class="Trigger-sc-132zjtq-2 fdtmxm"><button aria-label="Add workspace" color="#737373" data-qa="add-workspace-button" class="IconButtonRoot-i7dp45-0 efmjko">
                              <div height="auto" width="auto" color="#737373" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 gEOMsw"><span class="SVGInline"><svg class="SVGInline-svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6c0-1.10457.89543-2 2-2h8c0 1.10457-.89543 2-2 2H0z"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0v8c0 1.10457-.89543 2-2 2V2c0-1.104569.89543-2 2-2z"></path>
                                  </svg></span></div>
                            </button></div>
                          <div class="Trigger-sc-132zjtq-2 fdtmxm"><button aria-label="Search" color="#737373" data-qa="search-button" class="IconButtonRoot-i7dp45-0 efmjko">
                              <div height="auto" width="auto" color="#737373" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 gEOMsw"><span class="SVGInline"><svg class="SVGInline-svg" width="13" height="13" viewBox="0 0 13 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M9.9502 8.77257c.6725-.91404 1.0744-2.03855 1.0744-3.26027C11.0246 2.4675 8.55709 0 5.5123 0 2.4675 0 0 2.4675 0 5.5123c0 3.04479 2.4675 5.5123 5.5123 5.5123 1.21671 0 2.33721-.3989 3.24824-1.06639l1.86816 1.89819c.6545.6545 1.7168.6545 2.3713 0L9.9502 8.77257zM1.60358 5.5123c0-2.15581 1.75391-3.90872 3.90872-3.90872 2.1548 0 3.90872 1.75391 3.90872 3.90872 0 2.1548-1.75392 3.90872-3.90872 3.90872-2.15481 0-3.90872-1.75392-3.90872-3.90872z">
                                    </path>
                                  </svg></span></div>
                            </button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div tabindex="0" class="ChildrenWrapper-sc-1ukpyz-3 eWfra">
                    <div class="Spacer-cjod5i-0 bFphE">
                      <ul class="ListRoot-lexhmg-0 jFYLjf">
                        <li size="1" class="ListItem-lexhmg-1 fYsvxc">
                          <div><a data-qa="workspace-item" data-qa-workspace-id="xkV3Cw" href="/accounts/01DX48P3KBMQSCBKYZB47NYYQ6/workspaces/xkV3Cw" class="Link-sc-1bfji0h-0 workspace-list__Link-qj082h-1 eoCqeG">
                              <div class="workspace-list__WrapperVerticalMenuItem-qj082h-2 JglLJ">
                                <div orientation="horizontal" class="Spread-sc-1pjvgl-0 hBfqtO"><span color="#262627" font-family="sans" class="Text-wqps8m-0 cFlRDP">My workspace</span>
                                  <div orientation="horizontal" class="Distribute-oruih0-0 beQEXA"><span color="#898989" data-qa="workspace-forms-count-xkV3Cw" font-family="sans"
                                      class="Text-wqps8m-0 workspace-list__FormsCount-qj082h-0 bvYcyn">3</span></div>
                                </div>
                              </div>
                            </a></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="BottomSectionWrapper-sc-1ukpyz-1 JQYyd">
                    <div class="workspace-list__Wrapper-qj082h-3 knVhB">
                      <div class="help-center-content__Wrapper-sc-1x892rx-2 fdSYvF">
                        <div class="Container-sc-14tr3x4-0 egQjir">
                          <button aria-expanded="false" class="help-center-content__TitleWrapper-sc-1x892rx-0 hSKmej">
                            <div orientation="horizontal" class="Spread-sc-1pjvgl-0 jhOqJf">
                              <span font-weight="medium" font-family="sans" class="Text-wqps8m-0 drnBiU">Help &amp; Inspiration</span>
                              <div height="auto" width="auto" color="#AAA" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 cdQlVN">
                                <span class="SVGInline">
                                  <svg class="SVGInline-svg" width="12" height="7" viewBox="0 0 12 7" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M6.00008 2.94976L8.87876 5.82845C9.65981 6.6095 10.9261 6.60949 11.7072 5.82844L6.00008 0.121338L0.292969 5.82844C1.07402 6.60949 2.34035 6.60949 3.1214 5.82844L6.00008 2.94976Z"></path>
                                  </svg>
                                </span>
                              </div>
                            </div>
                          </button>
                          <div class="help-center-content__ContentWrapper-sc-1x892rx-3 fFYzWg">
                            <div class="Container-sc-14tr3x4-0 gaRaRN">
                              <ul class="ListRoot-lexhmg-0 jFYLjf">
                                <li class="ListItem-lexhmg-1 dpyYhN"><a color="#898989" href="https://www.typeform.com/help/" rel="noopener noreferrer" tabindex="-1" target="_blank" class="Link-sc-1bfji0h-0 eUeiwM">
                                    <div class="help-center-content__ItemWrapper-sc-1x892rx-1 vTYJl">
                                      <div orientation="horizontal" class="Distribute-oruih0-0 iMvuxr">
                                        <div height="8px" width="8px" color="#4FB0AE" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 byiYvC"><span class="SVGInline"><svg class="SVGInline-svg" width="8" height="12" viewBox="0 0 8 12"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <g fill-rule="evenodd">
                                                <path
                                                  d="M0 5h2v.088H0V5zm0-1.25C0 1.494 1.626 0 4 0c2.377 0 4 1.488 4 3.75 0 1.462-.636 2.323-1.885 3.164l-.44.29c-.33.221-.482.355-.54.455C5.068 7.774 4.999 8.25 5 9l-2 .003c-.002-1.083.108-1.835.405-2.347.255-.439.59-.732 1.158-1.113l.435-.287C5.75 4.748 6 4.41 6 3.75 6 2.633 5.309 2 4 2c-1.305 0-2 .638-2 1.75v1.338H0V3.75z"
                                                  fill-rule="nonzero"></path>
                                                <path d="M3 10h2v2H3z"></path>
                                              </g>
                                            </svg></span></div>
                                        <div class="Container-sc-14tr3x4-0 ieWpba">Help Center</div>
                                      </div>
                                    </div>
                                  </a></li>
                                <li class="ListItem-lexhmg-1 dpyYhN"><a color="#898989" href="https://www.typeform.com/help/my-1st-typeform/" rel="noopener noreferrer" tabindex="-1" target="_blank" class="Link-sc-1bfji0h-0 eUeiwM">
                                    <div class="help-center-content__ItemWrapper-sc-1x892rx-1 vTYJl">
                                      <div orientation="horizontal" class="Distribute-oruih0-0 iMvuxr">
                                        <div height="8px" width="8px" color="#e04f78" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 bpFEdq"><span class="SVGInline"><svg class="SVGInline-svg" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path
                                                d="M7.64345.467259L8.98398 4.5934h4.33832c.6554 0 .9275.83827.3977 1.22371l-3.5097 2.55024 1.3405 4.12615c.2026.623-.5105 1.1414-1.0408.7564l-3.50969-2.5506-3.50969 2.5502c-.53026.385-1.24339-.133-1.04083-.7565l1.34053-4.12609-3.510132-2.5498C-.250072 5.4321.022496 4.5934.677883 4.5934H5.01622L6.35674.467259c.20257-.623012 1.08458-.623012 1.28671 0z">
                                              </path>
                                            </svg></span></div>
                                        <div class="Container-sc-14tr3x4-0 ieWpba">Learn the basics</div>
                                      </div>
                                    </div>
                                  </a></li>
                                <li class="ListItem-lexhmg-1 dpyYhN"><a color="#898989" href="https://www.typeform.com/help/what-is-logic-jump/" rel="noopener noreferrer" tabindex="-1" target="_blank" class="Link-sc-1bfji0h-0 eUeiwM">
                                    <div class="help-center-content__ItemWrapper-sc-1x892rx-1 vTYJl">
                                      <div orientation="horizontal" class="Distribute-oruih0-0 iMvuxr">
                                        <div height="8px" width="8px" color="#ffba49" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 hcFxEI"><span class="SVGInline"><svg class="SVGInline-svg" width="11" height="11" viewBox="0 0 11 11" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path
                                                d="M9.27497 7.55658c-.33409.00018-.66088.09777-.94036.28083-.27947.18306-.4995.44365-.63313.74985H5.35155c-.30164.00002-.5949-.09921-.83456-.28236-.23965-.18316-.4124-.44008-.49157-.73114L2.78861 3.04568c.21632-.17081.38836-.39117.50159-.64246h4.41128c.15786.3617.43544.65801.78608.83912.35063.1811.75294.23595 1.13926.15532.38628-.08063.73308-.29182.98198-.59806.249-.30624.3848-.68885.3848-1.08349 0-.39465-.1358-.777256-.3848-1.083495-.2489-.306239-.5957-.517429-.98198-.5980587C9.2405-.0460735 8.83819.00877499 8.48756.189879c-.35064.181104-.62822.477417-.78608.839111H3.2902C3.17149.754064 2.98297.514944 2.74333.33535 2.5037.155757 2.22128.0419287 1.92408.00515697 1.62688-.0316148 1.32523.00994713 1.04905.12572.772874.241493.531754.427454.349615.665161.167476.902867.0506461 1.18406.0107074 1.48085c-.0399386.29679-.00159613.59886.1112256.87626.112821.2774.296203.52048.531954.70515.23575.18466.515683.30448.812023.34759l1.23337 4.52808c.15836.58211.50384 1.09596.98316 1.46227.47932.36632 1.06584.56476 1.66911.56472h2.34993c.12442.28338.32311.52788.57505.70768.25194.1798.54778.2882.85624.3137.30846.0255.61808-.0328.89613-.1687.2781-.136.5142-.3446.6835-.6037.1693-.25908.2654-.55912.2783-.86837.0128-.30925-.0582-.61622-.2054-.88845-.1473-.27224-.3654-.49963-.6312-.65814-.26588-.15851-.56961-.24225-.87913-.24236z">
                                              </path>
                                            </svg></span></div>
                                        <div class="Container-sc-14tr3x4-0 ieWpba">Branch or skip questions</div>
                                      </div>
                                    </div>
                                  </a></li>
                                <li class="ListItem-lexhmg-1 dpyYhN"><a color="#898989" href="https://www.typeform.com/help/what-are-hidden-fields/" rel="noopener noreferrer" tabindex="-1" target="_blank" class="Link-sc-1bfji0h-0 eUeiwM">
                                    <div class="help-center-content__ItemWrapper-sc-1x892rx-1 vTYJl">
                                      <div orientation="horizontal" class="Distribute-oruih0-0 iMvuxr">
                                        <div height="8px" width="8px" color="#3C6997" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 dwvYkB"><span class="SVGInline"><svg class="SVGInline-svg" width="16" height="15" viewBox="0 0 16 15" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path
                                                d="M9.4995 7.13445L16 0.633951C15.219 -0.147049 14.0215 -0.216049 13.325 0.480451L11.08 2.72545C10.12 2.36745 9.084 2.16695 8 2.16695C4.494 2.16695 1.4615 4.20395 0 7.16695C0.709 8.60395 1.789 9.81945 3.112 10.693L0.069 13.736C0.85 14.517 2.0475 14.586 2.744 13.8895L8.006 8.62745C8.8295 8.62445 9.496 7.95795 9.4995 7.13445ZM4.5 7.12845C4.5 5.19545 6.067 3.62845 8 3.62845C8.6265 3.62845 9.2105 3.79795 9.7185 4.08645L8.1605 5.64445C8.107 5.63845 8.055 5.62845 8 5.62845C7.1715 5.62845 6.5 6.29995 6.5 7.12845C6.5 7.18345 6.5105 7.23545 6.516 7.28895L4.958 8.84695C4.6695 8.33895 4.5 7.75495 4.5 7.12845Z">
                                              </path>
                                              <path
                                                d="M11.4945 7.23745C11.4375 9.08295 9.9545 10.566 8.109 10.623L6.666 12.0655C7.1015 12.1315 7.5465 12.167 8 12.167C11.506 12.167 14.5385 10.13 16 7.16695C15.526 6.20545 14.884 5.34395 14.1165 4.61545L11.4945 7.23745Z">
                                              </path>
                                            </svg></span></div>
                                        <div class="Container-sc-14tr3x4-0 ieWpba">Pull in info you already know</div>
                                      </div>
                                    </div>
                                  </a></li>
                                <li class="ListItem-lexhmg-1 dpyYhN"><a color="#898989" href="https://www.typeform.com/help/embed-a-typeform/" rel="noopener noreferrer" tabindex="-1" target="_blank" class="Link-sc-1bfji0h-0 eUeiwM">
                                    <div class="help-center-content__ItemWrapper-sc-1x892rx-1 vTYJl">
                                      <div orientation="horizontal" class="Distribute-oruih0-0 iMvuxr">
                                        <div height="8px" width="8px" color="#a086c4" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 ibdGyK"><span class="SVGInline"><svg class="SVGInline-svg" width="14" height="14" viewBox="0 0 14 14"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <g fill-rule="evenodd">
                                                <rect width="10" height="10" rx="1"></rect>
                                                <path d="M0 7h1v6h12V1H7V0h6a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7zm0 0h1v6h12V1H7V0h6a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7z" fill-rule="nonzero"></path>
                                              </g>
                                            </svg></span></div>
                                        <div class="Container-sc-14tr3x4-0 ieWpba">Embed your typeform</div>
                                      </div>
                                    </div>
                                  </a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div width="remaining" class="SplitItem-sc-3xe4fi-1 RweGe">
              <div class="workspace-content__MainSection-sc-5zixv2-0 OYrhE">
                <div height="full" class="Container-sc-14tr3x4-0 kJdXgz">
                  <div data-qa="app-scroller" class="workspace-content__Scroller-sc-5zixv2-1 bclTAF">
                    <div height="full" class="Container-sc-14tr3x4-0 aFKHS">
                      <div orientation="horizontal" class="Split-sc-3xe4fi-0 igAbRq">
                        <div width="remaining" class="SplitItem-sc-3xe4fi-1 RweGe">
                          <div>
                            <div orientation="horizontal" class="Split-sc-3xe4fi-0 cupxNW">
                              <div data-qa="workspace-name-wrapper" width="remaining" class="SplitItem-sc-3xe4fi-1 deTZbk">
                                <div class="workspace-header__InlineEditorWrapper-u56sxg-0 euLkTy">
                                  <div class="InlineEditorRoot-sc-3cr9on-0 fqOeTR"><input aria-label="workspace edit name" data-qa="workspace-name-input-editable" width="xlarge" class="Input-sc-3cr9on-1 fKDwxI" value="My workspace">
                                    <div class="ControllerWrapper-sc-3cr9on-2 hjedlK">My workspace<span class="EmptyCharacter-sc-3cr9on-3 flfzmG">&nbsp;</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="Spacer-cjod5i-0 juNslI">
                              <div orientation="horizontal" class="Distribute-oruih0-0 gvewVn">
                                <div orientation="horizontal" class="Distribute-oruih0-0 bQSMLn">
                                  <div data-qa="workspace-members" class="workspace-members__MembersListWrapper-sc-130rgo4-0 UxLdz">
                                    <div data-qa="workspace-member-avatar" class="workspace-members__ItemWrapper-sc-130rgo4-1 jWgqpD">
                                      <div class="Trigger-sc-132zjtq-2 fdtmxm">
                                        <div aria-label="Arsène (Owner)" class="PictureWrapper-sc-15cvr7j-0 jreGyp"><span font-weight="medium" font-family="sans" class="Text-wqps8m-0 AvatarText-sc-15cvr7j-1 tWUly">A</span><img
                                            alt="Gravatar for k2.aouman@gmail.com" src="//www.gravatar.com/avatar/8a033c9384ee8919792f4fc1aac958c5?d=blank&amp;r=g&amp;s=50"
                                            srcset="//www.gravatar.com/avatar/8a033c9384ee8919792f4fc1aac958c5?d=blank&amp;r=g&amp;s=100 2x" height="50" width="50" class="react-gravatar Picture-sc-15cvr7j-2 ivSdHp"><svg fill="#e4b83a" height="32"
                                            width="32" class="ShapeWrapper-sc-15cvr7j-3 cRFzNx">
                                            <mask height="32" id="kitt-1" maskUnits="userSpaceOnUse" width="32" x="0" y="0">
                                              <circle cx="16" cy="16" fill="#ffffff" r="16"></circle>
                                            </mask>
                                            <g fill="inherit" mask="url(#a)">
                                              <g>
                                                <path d="M45.766 8.824c4.18.716-12.161 15.5 0 37.5 7.5 7.5-7.98-4.665-12.161-5.38-4.18-.716-21.273-6.247-19.84-14.62 1.434-8.372 27.82-18.216 32-17.5z"></path>
                                                <path clip-rule="evenodd"
                                                  d="M14.198 7.65c.581-4.731.035-9.123-2.76-12.774l.793-.607c3.015 3.936 3.558 8.63 2.96 13.503-.59 4.793-2.292 9.83-3.902 14.59l-.07.207c-1.64 4.854-3.155 9.388-3.378 13.192-.11 1.892.103 3.567.755 4.992.649 1.416 1.748 2.62 3.476 3.554l-.475.88c-1.903-1.028-3.163-2.388-3.91-4.018-.742-1.62-.96-3.472-.844-5.466.232-3.968 1.803-8.642 3.43-13.455l.052-.155c1.622-4.797 3.297-9.752 3.873-14.443z"
                                                  fill-rule="evenodd"></path>
                                              </g>
                                            </g>
                                          </svg></div>
                                      </div>
                                    </div>
                                    <div class="Trigger-sc-132zjtq-2 fdtmxm"><button aria-label="Add team members" color="#898989" class="IconButtonRoot-i7dp45-0 NnHeu">
                                        <div height="auto" width="auto" color="#898989" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 NBhmZ"><span class="SVGInline"><svg class="SVGInline-svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6c0-1.10457.89543-2 2-2h8c0 1.10457-.89543 2-2 2H0z"></path>
                                              <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0v8c0 1.10457-.89543 2-2 2V2c0-1.104569.89543-2 2-2z"></path>
                                            </svg></span></div>
                                      </button></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="Container-sc-14tr3x4-0 workspace-forms__ContainerWrapper-sc-1oymojs-0 dHNJSo">
                        <div class="partial-overlay__OverlayWrapper-sc-1tj5dlf-1 hFUQHh">
                          <div></div>
                        </div>
                        <div class="Spacer-cjod5i-0 bIqghL">
                          <div data-qa="form-item-typeform-limit-reached" class="hover-toggle__HoverToggle-sc-1sfej5t-0 form-item-disabled-button__StyledHoverContainer-sc-1tputnq-0 cyGvRq">
                            <div class="hover-toggle__HoverOff-sc-1sfej5t-2 cVryYV"><button data-qa="form-item-new-typeform" disabled="" class="form-item-enabled-button__FormItemButton-sc-12v2pgy-0 cDresi"><span font-weight="bold"
                                  font-family="sans" class="Text-wqps8m-0 MNpcw">
                                  <p class="form-item-enabled-button__LabelLine-sc-12v2pgy-3 kRrtQG">New</p>
                                  <p class="form-item-enabled-button__LabelLine-sc-12v2pgy-3 kRrtQG">typeform</p>
                                </span>
                                <div class="form-item-enabled-button__IconWrapper-sc-12v2pgy-1 bEyisW">
                                  <div class="form-item-enabled-button__IconBackground-sc-12v2pgy-2 QbRCy">
                                    <div height="auto" width="auto" color="#FFF" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 ipgOCI"><span class="SVGInline"><svg class="SVGInline-svg" style="width: 14px;height: 14px;" width="10" height="10"
                                          viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6c0-1.10457.89543-2 2-2h8c0 1.10457-.89543 2-2 2H0z"></path>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0v8c0 1.10457-.89543 2-2 2V2c0-1.104569.89543-2 2-2z"></path>
                                        </svg></span></div>
                                  </div>
                                </div>
                              </button></div>
                            <div class="hover-toggle__HoverOn-sc-1sfej5t-1 form-item-disabled-button__HoverMessageContainer-sc-1tputnq-1 bysBUH"><span font-family="sans" class="Text-wqps8m-0 byQWaa">Typeform limit reached! <a
                                  data-qa="form-limit-upgrade-link" class="Link-sc-1bfji0h-0 bUYdAx">Upgrade to create more</a></span></div>
                          </div>
                        </div>
                        <div class="Spacer-cjod5i-0 bIqghL">
                          <div orientation="vertical" class="Distribute-oruih0-0 form-item-plan-limits-base__FormItem-jq1vzx-0 bLcfyo"><span font-family="sans" class="Text-wqps8m-0 lnNAwU">Your <strong>Free</strong> plan usage</span>
                            <div orientation="vertical" class="Distribute-oruih0-0 dbHOca"><span font-family="sans" class="Text-wqps8m-0 gsNdGe">Typeforms</span>
                              <div class="limits-usage-bar__ProgressBarBackground-uvhgaz-0 dPebuZ">
                                <div class="limits-usage-bar__ProgressBarLine-uvhgaz-1 dukltc"></div>
                              </div><span font-family="sans" class="Text-wqps8m-0 limits-usage-bar__PaddedText-uvhgaz-2 feFQid">3<span font-family="sans" class="Text-wqps8m-0 liMnBX"> / 3 this account</span></span>
                            </div>
                            <div orientation="vertical" class="Distribute-oruih0-0 dbHOca"><span font-family="sans" class="Text-wqps8m-0 gsNdGe">Responses</span>
                              <div class="limits-usage-bar__ProgressBarBackground-uvhgaz-0 dPebuZ">
                                <div class="limits-usage-bar__ProgressBarLine-uvhgaz-1 SVTsq"></div>
                              </div><span font-family="sans" class="Text-wqps8m-0 limits-usage-bar__PaddedText-uvhgaz-2 feFQid">0<span font-family="sans" class="Text-wqps8m-0 liMnBX"> / 100 this month</span></span>
                            </div>
                          </div>
                        </div>
                        <div class="Spacer-cjod5i-0 bIqghL">
                          <div draggable="true">
                            <div data-qa="form-item" data-qa-form-id="oGi9KN" class="form-item__Wrapper-sc-1z05hji-0 ihPjdH">
                              <div height="full" orientation="vertical" class="Split-sc-3xe4fi-0 bpPqLs">
                                <div height="remaining" class="SplitItem-sc-3xe4fi-1 eOxpZy">
                                  <div class="form-item-badge__BadgeWrapper-sgtscx-0 cDqUoM"></div><a href="/form/oGi9KN/create" class="form-item__FormThemeContainer-sc-1z05hji-1 hbsFHj">
                                    <div orientation="vertical" class="Distribute-oruih0-0 form-item__TitleDistribute-sc-1z05hji-2 gFgODA">
                                      <div width="100%" height="100%" class="Align-sc-1shbtnq-0 ktLoff"><span data-qa="form-item-title" font-family="sans" class="Text-wqps8m-0 form-item__FormTitle-sc-1z05hji-3 iFmaYh">Formulaire d'enquête 3</span>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                                <div class="SplitItem-sc-3xe4fi-1 cgtgYN">
                                  <div class="footer__FooterContainer-sc-1mz4tdg-0 gDJIYf">
                                    <div orientation="horizontal" class="Spread-sc-1pjvgl-0 jhOqJf"><a color="#4c4c4c" href="/form/oGi9KN/results#responses" class="Link-sc-1bfji0h-0 fLkhkf">No responses</a>
                                      <div content="[object Object]" class="PopoverRoot-sc-1vzvfd2-0 hrGwYv"><button aria-controls="kitt-6" aria-expanded="false" aria-haspopup="true" class="Trigger-sc-1vzvfd2-1 bYzTiB">
                                          <div height="auto" width="auto" aria-label="form item menu" data-qa="form-item-menu-button" role="button" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 NBhmZ footer__StyledIcon-sc-1mz4tdg-1 dVqZjw"
                                            color="#898989"><span class="SVGInline"><svg class="SVGInline-svg" width="14" height="4" viewBox="0 0 14 4" xmlns="http://www.w3.org/2000/svg">
                                                <g transform="rotate(90 7 7)" fill-rule="evenodd">
                                                  <circle cx="2" cy="2" r="1.5"></circle>
                                                  <circle cx="2" cy="7" r="1.5"></circle>
                                                  <circle cx="2" cy="12" r="1.5"></circle>
                                                </g>
                                              </svg></span></div>
                                        </button>
                                        <div aria-hidden="true" id="kitt-6" class="ContentWrapper-sc-1vzvfd2-2 VTpSS">
                                          <div class="AnimateRoot-sc-8m2keq-0 hNdvyd">
                                            <div></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="Spacer-cjod5i-0 bIqghL">
                          <div draggable="true">
                            <div data-qa="form-item" data-qa-form-id="ugCOJ1" class="form-item__Wrapper-sc-1z05hji-0 ihPjdH">
                              <div height="full" orientation="vertical" class="Split-sc-3xe4fi-0 bpPqLs">
                                <div height="remaining" class="SplitItem-sc-3xe4fi-1 eOxpZy">
                                  <div class="form-item-badge__BadgeWrapper-sgtscx-0 cDqUoM"></div><a href="/form/ugCOJ1/create" class="form-item__FormThemeContainer-sc-1z05hji-1 hbsFHj">
                                    <div orientation="vertical" class="Distribute-oruih0-0 form-item__TitleDistribute-sc-1z05hji-2 gFgODA">
                                      <div width="100%" height="100%" class="Align-sc-1shbtnq-0 ktLoff"><span data-qa="form-item-title" font-family="sans" class="Text-wqps8m-0 form-item__FormTitle-sc-1z05hji-3 iFmaYh">Formulaire d’enquête 2</span>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                                <div class="SplitItem-sc-3xe4fi-1 cgtgYN">
                                  <div class="footer__FooterContainer-sc-1mz4tdg-0 gDJIYf">
                                    <div orientation="horizontal" class="Spread-sc-1pjvgl-0 jhOqJf"><a color="#4c4c4c" href="/form/ugCOJ1/results#responses" class="Link-sc-1bfji0h-0 fLkhkf">No responses</a>
                                      <div content="[object Object]" class="PopoverRoot-sc-1vzvfd2-0 hrGwYv"><button aria-controls="kitt-7" aria-expanded="false" aria-haspopup="true" class="Trigger-sc-1vzvfd2-1 bYzTiB">
                                          <div height="auto" width="auto" aria-label="form item menu" data-qa="form-item-menu-button" role="button" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 NBhmZ footer__StyledIcon-sc-1mz4tdg-1 dVqZjw"
                                            color="#898989"><span class="SVGInline"><svg class="SVGInline-svg" width="14" height="4" viewBox="0 0 14 4" xmlns="http://www.w3.org/2000/svg">
                                                <g transform="rotate(90 7 7)" fill-rule="evenodd">
                                                  <circle cx="2" cy="2" r="1.5"></circle>
                                                  <circle cx="2" cy="7" r="1.5"></circle>
                                                  <circle cx="2" cy="12" r="1.5"></circle>
                                                </g>
                                              </svg></span></div>
                                        </button>
                                        <div aria-hidden="true" id="kitt-7" class="ContentWrapper-sc-1vzvfd2-2 VTpSS">
                                          <div class="AnimateRoot-sc-8m2keq-0 hNdvyd">
                                            <div></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="Spacer-cjod5i-0 bIqghL">
                          <div draggable="true">
                            <div data-qa="form-item" data-qa-form-id="hbiIdE" class="form-item__Wrapper-sc-1z05hji-0 ihPjdH">
                              <div height="full" orientation="vertical" class="Split-sc-3xe4fi-0 bpPqLs">
                                <div height="remaining" class="SplitItem-sc-3xe4fi-1 eOxpZy">
                                  <div class="form-item-badge__BadgeWrapper-sgtscx-0 cDqUoM"></div><a href="/form/hbiIdE/create" class="form-item__FormThemeContainer-sc-1z05hji-1 hbsFHj">
                                    <div orientation="vertical" class="Distribute-oruih0-0 form-item__TitleDistribute-sc-1z05hji-2 gFgODA">
                                      <div width="100%" height="100%" class="Align-sc-1shbtnq-0 ktLoff"><span data-qa="form-item-title" font-family="sans" class="Text-wqps8m-0 form-item__FormTitle-sc-1z05hji-3 iFmaYh">Formulaire d’enquête</span>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                                <div class="SplitItem-sc-3xe4fi-1 cgtgYN">
                                  <div class="footer__FooterContainer-sc-1mz4tdg-0 gDJIYf">
                                    <div orientation="horizontal" class="Spread-sc-1pjvgl-0 jhOqJf"><a color="#4c4c4c" href="/form/hbiIdE/results#responses" class="Link-sc-1bfji0h-0 fLkhkf">No responses</a>
                                      <div content="[object Object]" class="PopoverRoot-sc-1vzvfd2-0 hrGwYv"><button aria-controls="kitt-8" aria-expanded="false" aria-haspopup="true" class="Trigger-sc-1vzvfd2-1 bYzTiB">
                                          <div height="auto" width="auto" aria-label="form item menu" data-qa="form-item-menu-button" role="button" class="Align-sc-1shbtnq-0 IconRoot-tvakxr-0 NBhmZ footer__StyledIcon-sc-1mz4tdg-1 dVqZjw"
                                            color="#898989"><span class="SVGInline"><svg class="SVGInline-svg" width="14" height="4" viewBox="0 0 14 4" xmlns="http://www.w3.org/2000/svg">
                                                <g transform="rotate(90 7 7)" fill-rule="evenodd">
                                                  <circle cx="2" cy="2" r="1.5"></circle>
                                                  <circle cx="2" cy="7" r="1.5"></circle>
                                                  <circle cx="2" cy="12" r="1.5"></circle>
                                                </g>
                                              </svg></span></div>
                                        </button>
                                        <div aria-hidden="true" id="kitt-8" class="ContentWrapper-sc-1vzvfd2-2 dFcBuF">
                                          <div class="AnimateRoot-sc-8m2keq-0 euYyig">
                                            <div></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="AnimateRoot-sc-8m2keq-0 gkhvkB">
      <div></div>
    </div>
    <div>
      <div class="AnimateRoot-sc-8m2keq-0 gkhvkB">
        <div></div>
      </div>
      <div>
        <div>
          <div class="AnimateRoot-sc-8m2keq-0 gkhvkB BackdropContainer-a7lwzj-0 asJVC">
            <div></div>
          </div>
          <div class="AnimateRoot-sc-8m2keq-0 hJsHmX PopupContainer-a7lwzj-2 igWJNC">
            <div></div>
          </div>
        </div>
      </div>
      <div class="AnimateRoot-sc-8m2keq-0 gkhvkB">
        <div></div>
      </div>
      <div class="AnimateRoot-sc-8m2keq-0 gkhvkB">
        <div></div>
      </div>
    </div>
    <div>
      <div class="AnimateRoot-sc-8m2keq-0 gkhvkB BackdropContainer-a7lwzj-0 asJVC">
        <div></div>
      </div>
      <div class="AnimateRoot-sc-8m2keq-0 hJsHmX PopupContainer-a7lwzj-2 igWJNC">
        <div></div>
      </div>
    </div>
    <div offset="40px" class="NotificationRoot-sc-1l1bcv6-0 dkwGQI">
      <div class="AnimateRoot-sc-8m2keq-0 uiVMN">
        <div></div>
      </div>
    </div>
    <link
      href="https://fonts.googleapis.com/css?family=Acme|Arvo|Bangers|Cabin|Cabin+Condensed|Crete+Round|Dancing+Script|Exo|Handlee|Karla|Lato|Lekton|Lobster|Lora|McLaren|Montserrat|Nixie+One|Old+Standard+TT|Open+Sans|Oswald|Playfair+Display|Quicksand|Raleway|Signika|Sniglet|Source+Sans+Pro|Vollkorn"
      rel="stylesheet">
  </div>
</div>
@endsection

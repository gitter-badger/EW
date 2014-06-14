===================================================
  bootstrap-transition.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#transitions
  ===================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ========================================================== */
 -
 -
  !function ($) {
  
    "use strict"; // jshint ;_;
  
  
 -  /* CSS TRANSITION SUPPORT (http://www.modernizr.com/)
 -   * ======================================================= */
 -
    $(function () {
  
      $.support.transition = (function () {
 @@ -57,24 +34,7 @@
  
    })
  
 -}(window.jQuery);/* ==========================================================
  bootstrap-alert.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#alerts
  ==========================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ========================================================== */
 +}(window.jQuery);
  
  
  !function ($) {
 @@ -155,24 +115,7 @@
  
    $(document).on('click.alert.data-api', dismiss, Alert.prototype.close)
  
 -}(window.jQuery);/* ============================================================
  bootstrap-button.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#buttons
  ============================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ============================================================ */
 +}(window.jQuery);
  
  
  !function ($) {
 @@ -259,24 +202,7 @@
      $btn.button('toggle')
    })
  
 -}(window.jQuery);/* ==========================================================
  bootstrap-carousel.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#carousel
  ==========================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ========================================================== */
 +}(window.jQuery);
  
  
  !function ($) {
 @@ -465,24 +391,7 @@
      e.preventDefault()
    })
  
 -}(window.jQuery);/* =============================================================
  bootstrap-collapse.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#collapse
  =============================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ============================================================ */
 +}(window.jQuery);
  
  
  !function ($) {
 @@ -631,24 +540,7 @@
      $(target).collapse(option)
    })
  
 -}(window.jQuery);/* ============================================================
  bootstrap-dropdown.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#dropdowns
  ============================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ============================================================ */
 +}(window.jQuery);
  
  
  !function ($) {
 @@ -800,24 +692,6 @@
      .on('keydown.dropdown.data-api', toggle + ', [role=menu]' , Dropdown.prototype.keydown)
  
  }(window.jQuery);
 -/* =========================================================
  bootstrap-modal.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#modals
  =========================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ========================================================= */
  
  
  !function ($) {
 @@ -1047,25 +921,7 @@
    })
  
  }(window.jQuery);
 -/* ===========================================================
  bootstrap-tooltip.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#tooltips
  Inspired by the original jQuery.tipsy by Jason Frame
  ===========================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ========================================================== */
 +
  
  
  !function ($) {
 @@ -1408,24 +1264,6 @@
    }
  
  }(window.jQuery);
 -/* ===========================================================
  bootstrap-popover.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#popovers
  ===========================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  =========================================================== */
  
  
  !function ($) {
 @@ -1522,24 +1360,6 @@
    }
  
  }(window.jQuery);
 -/* =============================================================
  bootstrap-scrollspy.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#scrollspy
  =============================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ============================================================== */
  
  
  !function ($) {
 @@ -1683,24 +1503,7 @@
      })
    })
  
 -}(window.jQuery);/* ========================================================
  bootstrap-tab.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#tabs
  ========================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ======================================================== */
 +}(window.jQuery);
  
  
  !function ($) {
 @@ -1826,25 +1629,7 @@
      $(this).tab('show')
    })
  
 -}(window.jQuery);/* =============================================================
  bootstrap-typeahead.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#typeahead
  =============================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ============================================================ */
 -
 +}(window.jQuery);
  
  !function($){
  
 @@ -2161,24 +1946,6 @@
    })
  
  }(window.jQuery);
 -/* ==========================================================
  bootstrap-affix.js v2.3.2
  http://getbootstrap.com/2.3.2/javascript.html#affix
  ==========================================================
  Copyright 2013 Twitter, Inc.
 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
 
  http://www.apache.org/licenses/LICENSE-2.0
 
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
  ========================================================== */
  
  
  !function ($) {
 @@ -2277,4 +2044,4 @@
    })
  
  
 -}(window.jQuery);
 +}(window.jQuery);

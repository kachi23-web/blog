/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/admin/demo/chart-pie-demo.js":
/*!***************************************************!*\
  !*** ./resources/js/admin/demo/chart-pie-demo.js ***!
  \***************************************************/
/***/ (() => {

eval("// Set new default font family and font color to mimic Bootstrap's default styling\nChart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Arial,sans-serif';\nChart.defaults.global.defaultFontColor = '#292b2c'; // Pie Chart Example\n\nvar ctx = document.getElementById(\"myPieChart\");\nvar myPieChart = new Chart(ctx, {\n  type: 'pie',\n  data: {\n    labels: [\"Blue\", \"Red\", \"Yellow\", \"Green\"],\n    datasets: [{\n      data: [12.21, 15.58, 11.25, 8.32],\n      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745']\n    }]\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW4vZGVtby9jaGFydC1waWUtZGVtby5qcz9mYWYxIl0sIm5hbWVzIjpbIkNoYXJ0IiwiZGVmYXVsdHMiLCJnbG9iYWwiLCJkZWZhdWx0Rm9udEZhbWlseSIsImRlZmF1bHRGb250Q29sb3IiLCJjdHgiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwibXlQaWVDaGFydCIsInR5cGUiLCJkYXRhIiwibGFiZWxzIiwiZGF0YXNldHMiLCJiYWNrZ3JvdW5kQ29sb3IiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0FBLEtBQUssQ0FBQ0MsUUFBTixDQUFlQyxNQUFmLENBQXNCQyxpQkFBdEIsR0FBMEMsZ0dBQTFDO0FBQ0FILEtBQUssQ0FBQ0MsUUFBTixDQUFlQyxNQUFmLENBQXNCRSxnQkFBdEIsR0FBeUMsU0FBekMsQyxDQUVBOztBQUNBLElBQUlDLEdBQUcsR0FBR0MsUUFBUSxDQUFDQyxjQUFULENBQXdCLFlBQXhCLENBQVY7QUFDQSxJQUFJQyxVQUFVLEdBQUcsSUFBSVIsS0FBSixDQUFVSyxHQUFWLEVBQWU7QUFDOUJJLEVBQUFBLElBQUksRUFBRSxLQUR3QjtBQUU5QkMsRUFBQUEsSUFBSSxFQUFFO0FBQ0pDLElBQUFBLE1BQU0sRUFBRSxDQUFDLE1BQUQsRUFBUyxLQUFULEVBQWdCLFFBQWhCLEVBQTBCLE9BQTFCLENBREo7QUFFSkMsSUFBQUEsUUFBUSxFQUFFLENBQUM7QUFDVEYsTUFBQUEsSUFBSSxFQUFFLENBQUMsS0FBRCxFQUFRLEtBQVIsRUFBZSxLQUFmLEVBQXNCLElBQXRCLENBREc7QUFFVEcsTUFBQUEsZUFBZSxFQUFFLENBQUMsU0FBRCxFQUFZLFNBQVosRUFBdUIsU0FBdkIsRUFBa0MsU0FBbEM7QUFGUixLQUFEO0FBRk47QUFGd0IsQ0FBZixDQUFqQiIsInNvdXJjZXNDb250ZW50IjpbIi8vIFNldCBuZXcgZGVmYXVsdCBmb250IGZhbWlseSBhbmQgZm9udCBjb2xvciB0byBtaW1pYyBCb290c3RyYXAncyBkZWZhdWx0IHN0eWxpbmdcbkNoYXJ0LmRlZmF1bHRzLmdsb2JhbC5kZWZhdWx0Rm9udEZhbWlseSA9ICctYXBwbGUtc3lzdGVtLHN5c3RlbS11aSxCbGlua01hY1N5c3RlbUZvbnQsXCJTZWdvZSBVSVwiLFJvYm90byxcIkhlbHZldGljYSBOZXVlXCIsQXJpYWwsc2Fucy1zZXJpZic7XG5DaGFydC5kZWZhdWx0cy5nbG9iYWwuZGVmYXVsdEZvbnRDb2xvciA9ICcjMjkyYjJjJztcblxuLy8gUGllIENoYXJ0IEV4YW1wbGVcbnZhciBjdHggPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm15UGllQ2hhcnRcIik7XG52YXIgbXlQaWVDaGFydCA9IG5ldyBDaGFydChjdHgsIHtcbiAgdHlwZTogJ3BpZScsXG4gIGRhdGE6IHtcbiAgICBsYWJlbHM6IFtcIkJsdWVcIiwgXCJSZWRcIiwgXCJZZWxsb3dcIiwgXCJHcmVlblwiXSxcbiAgICBkYXRhc2V0czogW3tcbiAgICAgIGRhdGE6IFsxMi4yMSwgMTUuNTgsIDExLjI1LCA4LjMyXSxcbiAgICAgIGJhY2tncm91bmRDb2xvcjogWycjMDA3YmZmJywgJyNkYzM1NDUnLCAnI2ZmYzEwNycsICcjMjhhNzQ1J10sXG4gICAgfV0sXG4gIH0sXG59KTtcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYWRtaW4vZGVtby9jaGFydC1waWUtZGVtby5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/admin/demo/chart-pie-demo.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/admin/demo/chart-pie-demo.js"]();
/******/ 	
/******/ })()
;
const Ziggy = {"url":"http:\/\/localhost:8002","port":8002,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"home.index":{"uri":"\/","methods":["GET","HEAD"]},"example.table.index":{"uri":"example\/table","methods":["GET","HEAD"]},"example.table.table":{"uri":"example\/table\/table","methods":["GET","HEAD"]},"auth.login":{"uri":"auth\/login","methods":["GET","HEAD"]},"auth.register":{"uri":"auth\/register","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };

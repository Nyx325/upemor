package org.upemor.grafoponderado;

public class Main {

    public static void main(String[] args) {
        System.out.println("Hello World!");
        
        Vertice v1 = new Vertice("1");
        Vertice v2 = new Vertice("2");
        Vertice v3 = new Vertice("3");
        Vertice v4 = new Vertice("4");
        Vertice v5 = new Vertice("5");
        //Vertice v6 = new Vertice("6");
        
        /*v1.addAdyacencias(new Adyacencia(v2,4),new Adyacencia(v3,10),new Adyacencia(v4,14));
        
        v1.addAdyacencias(new Adyacencia(v5,5),new Adyacencia(v3,9),new Adyacencia(v1,4));
        
        v3.addAdyacencias(new Adyacencia(v1,10),new Adyacencia(v2,9),new Adyacencia(v5,8),new Adyacencia(v6,14),new Adyacencia(v4,2));
        
        v4.addAdyacencias(new Adyacencia(v1,14),new Adyacencia(v3,2),new Adyacencia(v6,3));
        
        v5.addAdyacencias(new Adyacencia(v2,5),new Adyacencia(v6,11),new Adyacencia(v3,8));
        
        v6.addAdyacencias(new Adyacencia(v3,14),new Adyacencia(v5,11),new Adyacencia(v4,3));
        
        GrafoPonderado grafo = new GrafoPonderado("Grafinator, the last one");
        grafo.addVertice(v1,v2,v3,v4,v5,v6);*/
        
        v1.addAdyacencias(new Adyacencia(v2,1), new Adyacencia(v4,1));
        v2.addAdyacencias(new Adyacencia(v1,1), new Adyacencia(v3,1), new Adyacencia(v4,1));
        v3.addAdyacencias(new Adyacencia(v4,1), new Adyacencia(v2,1), new Adyacencia(v5,1));
        v4.addAdyacencias(new Adyacencia(v1,1), new Adyacencia(v2,1), new Adyacencia(v3,1), new Adyacencia(v5,1));
        v5.addAdyacencias(new Adyacencia(v4,1), new Adyacencia(v3,1));
        
        GrafoPonderado grafo = new GrafoPonderado("Grafinator, the last one");
        grafo.addVertice(v1,v2,v3,v4,v5);
        
        
        grafo.mostrarListaAdyacencias();
        grafo.caminoMasCorto(v3);
        grafo.mostrarListaAdyacencias();
        /*grafo.recorridoEnAnchura(v4);
        grafo.recorridoEnProfundidad(v4);
        */
    }
}

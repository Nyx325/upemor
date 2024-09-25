package com.upemor;

public class App {
  public static void main(String[] args) {
    Graph<Integer> graph = new Graph<>("Grafo 1");
    Vertex<Integer> v1 = new Vertex<>("a", 1);
    Vertex<Integer> v2 = new Vertex<>("b", 2);
    Vertex<Integer> v3 = new Vertex<>("c", 3);
    Vertex<Integer> v4 = new Vertex<>("d", 4);

    v1.addEdges(v2, v3, v4);
    v2.addEdges(v3, v1);
    v3.addEdges(v2, v4, v1);
    v4.addEdges(v1);

    graph.addVertexs(v1, v2, v3, v4);
    graph.recorridoEnProfundidad("a");
    graph.recorridoEnProfundidad("b");

    graph.recorridoEnAnchura("a");
    graph.recorridoEnAnchura("b");
  }
}

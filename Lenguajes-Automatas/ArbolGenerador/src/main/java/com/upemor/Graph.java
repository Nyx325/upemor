
package com.upemor;

import java.util.*;

public class Graph {
  private String name;
  private List<Vertex> vertexs;

  public Graph(String name) {
    this.name = name;
    this.vertexs = new ArrayList<>();
  }

  public void add(Vertex v) {
    vertexs.add(v);
  }

  public void addAll(Vertex... vList) {
    for (Vertex v : vList) {
      vertexs.add(v);
    }
  }

  public String toString() {
    return name + " [Grado: " + vertexs.size() + "]";
  }

  public void mostrarGradoVertices() {
    for (Vertex v : vertexs) {
      System.out.println(v + " (Grado: " + v.getEdges().size() + ")");
    }
  }

  public void mostrarAdyacencias() {
    System.out.println("Grafo: " + name);
    for (Vertex vertex : vertexs) {
      System.out.println(vertex + " {");
      for (Vertex v : vertex.getEdges()) {
        System.out.println("   " + v);
      }
      System.out.println("}");
    }
  }

  public void recorridoEnAnchura(Vertex inicio) {
    Queue<Vertex> queue = new LinkedList<>();
    Set<Vertex> visited = new HashSet<>();

    Vertex startVertex = inicio;
    if (startVertex == null) {
      System.out.println("Vértice de inicio no encontrado.");
      return;
    }

    System.out.print(
        "Recorrido en anchura empezando por: " + startVertex.getLabel() + " {");

    queue.add(inicio);
    visited.add(inicio);

    while (!queue.isEmpty()) {
      Vertex current = queue.poll();
      System.out.print(" " + current.getLabel());

      for (Vertex neighbor : current.getEdges()) {
        if (!visited.contains(neighbor)) {
          visited.add(neighbor);
          queue.add(neighbor);
        }
      }
    }
    System.out.println("}");
  }

  public void recorridoEnProfundidad(Vertex inicio) {
    Stack<Vertex> stack = new Stack<>();
    Set<Vertex> visited = new HashSet<>();

    Vertex startVertex = inicio;

    if (startVertex == null) {
      System.out.println("Vértice de inicio no encontrado.");
      return;
    }

    System.out.print("Recorrido en profundidad empezando por: " +
        startVertex.getLabel() + " {");

    stack.add(inicio);
    visited.add(inicio);

    while (!stack.isEmpty()) {
      Vertex current = stack.pop();
      System.out.print(" " + current.getLabel());

      for (Vertex neighbor : current.getEdges()) {
        if (!visited.contains(neighbor)) {
          visited.add(neighbor);
          stack.add(neighbor);
        }
      }
    }
    System.out.println("}");
  }
}

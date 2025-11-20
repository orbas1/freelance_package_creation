import 'package:equatable/equatable.dart';

import 'attachment.dart';
import 'user.dart';

class Project extends Equatable {
  const Project({
    required this.id,
    required this.slug,
    required this.title,
    required this.description,
    required this.budgetMin,
    required this.budgetMax,
    this.location,
    this.offers,
    this.postedAt,
    this.isFavourite = false,
    this.user,
    this.attachments = const <AttachmentFile>[],
  });

  final int id;
  final String slug;
  final String title;
  final String description;
  final double budgetMin;
  final double budgetMax;
  final String? location;
  final int? offers;
  final String? postedAt;
  final bool isFavourite;
  final UserProfile? user;
  final List<AttachmentFile> attachments;

  factory Project.fromJson(Map<String, dynamic>? json) {
    if (json == null) {
      return const Project(
        id: 0,
        slug: '',
        title: '',
        description: '',
        budgetMin: 0,
        budgetMax: 0,
      );
    }
    return Project(
      id: json['id'] is int ? json['id'] : int.tryParse(json['id']?.toString() ?? '') ?? 0,
      slug: json['slug']?.toString() ?? json['id']?.toString() ?? '',
      title: json['project_title']?.toString() ?? json['title']?.toString() ?? '',
      description: json['project_description']?.toString() ?? json['description']?.toString() ?? '',
      budgetMin: _toDouble(json['project_minimum'] ?? json['min_price']),
      budgetMax: _toDouble(json['project_maximum'] ?? json['max_price']),
      location: json['project_location']?.toString() ?? json['location']?.toString(),
      offers: json['project_hiring_seller'] is int
          ? json['project_hiring_seller']
          : int.tryParse(json['project_hiring_seller']?.toString() ?? ''),
      postedAt: json['posted_at']?.toString(),
      isFavourite: json['is_favourite'] == 1 || json['is_favourite'] == true,
      user: UserProfile.fromJson(json['user'] as Map<String, dynamic>?),
      attachments: (json['attachments'] as List?)
              ?.map((file) => AttachmentFile.fromJson(file as Map<String, dynamic>?))
              .toList() ??
          const <AttachmentFile>[],
    );
  }

  Map<String, dynamic> toJson() => {
        'id': id,
        'slug': slug,
        'project_title': title,
        'project_description': description,
        'project_minimum': budgetMin,
        'project_maximum': budgetMax,
        'project_location': location,
        'project_hiring_seller': offers,
        'posted_at': postedAt,
        'is_favourite': isFavourite,
        'user': user?.toJson(),
        'attachments': attachments.map((file) => file.toJson()).toList(),
      };

  static double _toDouble(dynamic value) {
    if (value is num) {
      return value.toDouble();
    }
    return double.tryParse(value?.toString() ?? '') ?? 0;
  }

  @override
  List<Object?> get props => [
        id,
        slug,
        title,
        description,
        budgetMin,
        budgetMax,
        location,
        offers,
        postedAt,
        isFavourite,
        user,
        attachments,
      ];
}

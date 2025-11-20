import '../api/freelance_api_client.dart';
import '../models/bid.dart';
import '../models/dispute.dart';
import '../models/dispute_stage.dart';
import '../models/escrow.dart';
import '../models/escrow_action.dart';
import '../models/gig.dart';
import '../models/pagination.dart';
import '../models/project.dart';
import '../models/project_board.dart';
import '../models/gig_management.dart';
import '../models/tag.dart';

class FreelanceRepository {
  FreelanceRepository({required this.apiClient});

  final FreelanceApiClient apiClient;

  Future<PagedResult<Gig>> fetchGigs({Map<String, dynamic> filters = const {}}) {
    return apiClient.fetchGigs(params: filters);
  }

  Future<Gig> fetchGigDetails(int id) => apiClient.fetchGigDetails(id);

  Future<List<FreelanceTag>> fetchTags({String? type}) => apiClient.fetchTags(type: type);

  Future<PagedResult<Project>> fetchProjects({Map<String, dynamic> filters = const {}}) {
    return apiClient.fetchProjects(params: filters);
  }

  Future<Project> fetchProjectDetails(String slug) => apiClient.fetchProjectDetails(slug);

  Future<List<Dispute>> fetchDisputes({int perPage = 20}) => apiClient.fetchDisputes(perPage: perPage);

  Future<List<Escrow>> fetchEscrows() => apiClient.fetchEscrows();

  Future<ProjectBoard> fetchProjectBoard(String slug) => apiClient.fetchProjectBoard(slug);
  Future<GigManagement> fetchGigManagement(int id) => apiClient.fetchGigManagement(id);
  Future<List<DisputeStage>> fetchDisputeStages(int disputeId) => apiClient.fetchDisputeStages(disputeId);
  Future<void> advanceDispute({required int disputeId, required String stage, String? notes, String? decision}) {
    return apiClient.advanceDispute(disputeId: disputeId, stage: stage, notes: notes, decision: decision);
  }
  Future<List<EscrowAction>> fetchEscrowActions() => apiClient.fetchEscrowActions();
  Future<void> partialRelease({required int escrowId, required double amount, required String releasedBy, String? notes}) {
    return apiClient.partialRelease(escrowId: escrowId, amount: amount, releasedBy: releasedBy, notes: notes);
  }

  Future<void> updateProfileTags({required List<String> tags, String type = 'freelancer'}) {
    return apiClient.updateProfileTags(tags: tags, type: type);
  }

  Future<void> updateGigTags({required int gigId, required List<String> tags}) {
    return apiClient.updateGigTags(gigId: gigId, tags: tags);
  }

  Future<void> recordEscrowDecision({required int escrowId, required String decision, required String admin, String? notes}) {
    return apiClient.recordEscrowDecision(escrowId: escrowId, decision: decision, admin: admin, notes: notes);
  }

  Future<Dispute> openDispute({
    required String subject,
    required String referenceType,
    required int referenceId,
    String? message,
  }) {
    return apiClient.openDispute(
      subject: subject,
      referenceType: referenceType,
      referenceId: referenceId,
      message: message,
    );
  }

  Future<Bid> placeBid({
    required String projectSlug,
    required double amount,
    required String currency,
    String? coverLetter,
  }) {
    return apiClient.placeBid(
      projectSlug: projectSlug,
      amount: amount,
      currency: currency,
      coverLetter: coverLetter,
    );
  }

  Future<void> toggleFavourite({required int id, required String type}) {
    return apiClient.toggleFavourite(id: id, type: type);
  }
}
